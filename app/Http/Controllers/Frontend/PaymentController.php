<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use phpDocumentor\Reflection\Element;
use Session;
use URL;
use Redirect;

class PaymentController extends Controller
{
    private $_api_context;

    public function __construct()
    {

        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }

    public function index($package_id,$project_id)
    {
        $projectDetails = Projects::where('id',$project_id)->first();

        if ($package_id == 1) {
            $output_data = [
                'package_name' =>  'Widget Lite',
                'package_cost_per_month' => 5.00,
                'total_amount' => 60.00,
                'starting_date' => null,
                'ending_date' => null,
                'days' => 360,
            ];
        } elseif ($package_id == 2) {
           $output_data = [
               'package_name' => 'Widget Pro',
               'package_cost_per_month' => 5.00,
               'total_amount' => 180.00,
               'starting_date' => null,
               'ending_date' => null,
               'days' => 360,
           ];
        } elseif ($package_id  == 3){
            $output_data = [
                'package_name' => 'Optimizer',
                'package_cost_per_month' => 30.00,
                'total_amount' => 360.00,
                'starting_date' => null,
                'ending_date' => null,
                'days' => 360,
            ];
        }
        return view('frontend.user.checkout.checkout',[
            'package_details' => $output_data,
            'project_details' => $projectDetails
        ]);
    }

    public function postPaymentWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Product 1')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount'));

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Enter Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('frontend.user.paypal.status'))
            ->setCancelUrl(URL::route('frontend.user.paypal.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return Redirect::route('frontend.user.paypal.index');
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return Redirect::route('frontend.user.paypal.index');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
        return Redirect::route('frontend.user.paypal.index');
    }

    public function getPaymentStatus(Request $request)
    {
        $payment_id = Session::get('paypal_payment_id');

        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error','Payment failed');
            return Redirect::route('frontend.user.paypal.index');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            \Session::put('success','Payment success !!');
            return Redirect::route('frontend.user.paypal.index');
        }

        \Session::put('error','Payment failed !!');
        return Redirect::route('frontend.user.paypal.index');
    }
}
