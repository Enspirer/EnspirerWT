<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BillingInvoice;
use App\Models\Projects;
use App\Models\Widgets;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PayPal\Api\Invoice;
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
use phpDocumentor\Reflection\Types\Self_;
use Session;
use URL;
use Redirect;
use DB;
use Stripe;
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
                'package_id' => 1,
                'package_name' =>  'Widget Lite',
                'package_cost_per_month' => 5.00,
                'total_amount' => 60.00,
                'starting_date' => null,
                'ending_date' => null,
                'days' => 360,
            ];
        } elseif ($package_id == 2) {
           $output_data = [
               'package_id' => 2,
               'package_name' => 'Widget Pro',
               'package_cost_per_month' => 5.00,
               'total_amount' => 180.00,
               'starting_date' => null,
               'ending_date' => null,
               'days' => 360,
           ];
        } elseif ($package_id  == 3){
            $output_data = [
                'package_id' => 3,
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
        $redirect_urls->setReturnUrl(route('frontend.user.paypal.status',[$request->package_type,$request->project_id,$request->get('amount')]))
            ->setCancelUrl(route('frontend.user.paypal.status',[$request->package_type,$request->project_id,$request->get('amount')]));

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



    public function getPaymentStatus($package_id,$project_id,$amount,Request $request)
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
            if($package_id == 1){
                self::purchasedFunction(360,$project_id,'All-in-One Chat', '0');
                self::generateInvoice($project_id,$package_id,$amount,'annually',auth()->user()->id,'Paid');
                return redirect()->route('frontend.user.user_widget.settings', $project_id);

            }elseif ($package_id == 2 ){
                self::purchasedFunction(360,$project_id,'IMS Pro', '0','All-in-One Chat');
                self::generateInvoice($project_id,$package_id,$amount,'annually',auth()->user()->id,'Paid');
                return redirect()->route('frontend.user.user_widget.settings', $project_id);

            }elseif ($package_id == 3){
                self::optimizedOptimizerFunction($project_id,360);
                self::generateInvoice($project_id,$package_id,$amount,'annually',auth()->user()->id,'Paid');

                return redirect()->route('frontend.user.dashboard');
            }
//
            return Redirect::route('frontend.user.dashboard');
        }
        \Session::put('error','Payment failed !!');
        return Redirect::route('frontend.user.paypal.index');
    }

    public static function generateInvoice($project_id,$purchased_package,$price,$payment_plan,$user_id,$status){

        $projectDetails = Projects::where('id',$project_id)->first();
        if($purchased_package == 1){
            $purchased_package_sting = 'All In One Widget + IMS Lite';
        }elseif ($purchased_package ==2){
            $purchased_package_sting = 'All In One Widget + IMS Pro';
        }elseif ($purchased_package ==3){
            $purchased_package_sting = 'Optimizer';
        }

        $invoice_generate = new BillingInvoice;
        $invoice_generate->project_id = $project_id;
        $invoice_generate->purchased_package = $purchased_package_sting;
        $invoice_generate->is_purchased_seo_bots_id = null;
        $invoice_generate->price = $price;
        $invoice_generate->payment_plan = $payment_plan;
        $invoice_generate->payment_method = 'card_pymen';
        $invoice_generate->expire_date = $projectDetails->expire_date;
        $invoice_generate->user_id = $user_id;
        $invoice_generate->phone_number = 'null';
        $invoice_generate->address = 'null';
        $invoice_generate->status = $status;
        $invoice_generate->save();
        return 'payment_success';
    }

    public static function purchasedFunction($days,$project_id_req, $widget_type_req,$load_count_req,$widget_type_another= null)
    {

        $default_settings = '[{"template_layout":"1","whatsapp_number":"0797894561","bubble_icon":"whatsapp","chat_header":"Header Example!","caption":"Typically replies in minutes","image":"1","agent_name":"Sunimal","welcome_message":"Welcome Message!","btn_text":"Start Chat","start_chat":"on","show_icon":"on","position":"Embed Bubble","alignment":"right","where_display_chat":"Excluded Pages","specific_time_selector":"on","device":["desktop","mobile_device"],"visitors":"new_visitors","date_time":["monday","friday","saturday","sunday"],"start_time":"12:05PM","end_time":"01:10PM","timezone":"Asia\/Calcutta","auto_trigger":null,"pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage"],"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","button_corner_radius":"53","custom_css":"No"}]';
        $all_in_one = '[{"whatsapp_details":[null],"fb_details":[null],"telegram_details":[null],"line_details":[null],"viber_details":[null],"tawk_details":[null],"template_layout":"1","whatsapp_number":"079147258369","default_icon":"on","bubble_icon":"envelope-fill","chat_header":"Header All in One","caption":"Typically replies within an hour","image":"3","agent_name":"Yasiru","welcome_message":"Welcome Message! All In One","btn_text":"Start Chat With:","start_chat":"on","show_icon":"on","position":"Floating Bubble","alignment":"right","where_display_chat":"Specific Pages","specific_time_selector":"on","device":["desktop"],"visitors":"all_visitors","date_time":["thursday","friday"],"start_time":"05:20PM","end_time":"08:30PM","timezone":"Asia\/Calcutta","auto_trigger":"on","pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage","show_notification_in_tab_tile"],"bubble_background_color":"#055147","bubble_icon_color":"#bfc0bf","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","custom_css":"No"}]';
        $ims_pro = '[{"whatsapp_number":"0700000000","logo":null,"address":"main street","company_email":"company@company.com"}]';

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $widget_key = str_shuffle($pin);

        $widget_check = Widgets::where('project_id',$project_id_req)->where('widget_type',$widget_type_req)->first();
        // dd($widget_check);

        if($widget_check == null){

            $add = new Widgets;
            $add->status = 'Enabled';
            $add->widget_type = $widget_type_req;
            $add->widget_key = $widget_key;
            $add->load_count = 0;
            $add->project_id = $project_id_req;

            if($widget_type_req == 'Whatsapp Chat'){
                $add->settings = $default_settings;
            }elseif($widget_type_req == 'All-in-One Chat'){
                $add->settings = $all_in_one;
            }elseif($widget_type_req == 'Analytics'){
                $add->settings = null;
            }elseif($widget_type_req == 'IMS Pro'){
                $add->settings = $ims_pro;
            }


            if($widget_type_req == 'Whatsapp Chat'){
                $add->category = 'Widgets';
            }elseif($widget_type_req == 'All-in-One Chat'){
                $add->category = 'Widgets';
            }elseif($widget_type_req == 'Analytics'){
                $add->category = 'Analytics';
            }elseif($widget_type_req == 'IMS Pro'){
                $add->category = 'Widgets Plus';
            }

            $add->save();


            $project = Projects::where('id',$project_id_req)->first();

            $update = new Projects;

            $update->package_available_days = $days;
            if($widget_type_req == 'All-in-One Chat'){
                $update->selected_package = 'All In One Widget + IMS Lite';
            }
            elseif($widget_type_req == 'IMS Pro'){
                $update->selected_package = 'All In One Widget + IMS Pro';
            }
            $update->package_starting_date = $add->created_at;
            $update->package_type = 'Paid';
            $update->expire_date = $add->created_at->addDays($days);
            $update->status = 'Enabled';

            Projects::whereId($project->id)->update($update->toArray());
        }

        // dd($widget_check);

        $characters_two = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin_two = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters_two[rand(0, strlen($characters_two) - 1)];
        $widget_key_two = str_shuffle($pin_two);

        if($widget_type_another){
            $widget_check_another = Widgets::where('project_id',$project_id_req)->where('widget_type',$widget_type_another)->first();
            // dd($widget_check_another );

            if($widget_check_another == null){

                $add_another = new Widgets;
                $add_another->status = 'Enabled';
                $add_another->widget_type = $widget_type_another;
                $add_another->widget_key = $widget_key_two;
                $add_another->load_count = $load_count_req;
                $add_another->project_id = $project_id_req;

                if($widget_type_another == 'Whatsapp Chat'){
                    $add_another->settings = $default_settings;
                }elseif($widget_type_another == 'All-in-One Chat'){
                    $add_another->settings = $all_in_one;
                }elseif($widget_type_another == 'Analytics'){
                    $add_another->settings = null;
                }elseif($widget_type_another == 'IMS Pro'){
                    $add_another->settings = $ims_pro;
                }


                if($widget_type_another == 'Whatsapp Chat'){
                    $add_another->category = 'Widgets Plus';
                }elseif($widget_type_another == 'All-in-One Chat'){
                    $add_another->category = 'Widgets Plus';
                }elseif($widget_type_another == 'Analytics'){
                    $add_another->category = 'Analytics';
                }elseif($widget_type_another == 'IMS Pro'){
                    $add_another->category = 'Widgets Plus';
                }

                $add_another->save();


                $update = new Projects;
                $update->package_available_days = $days;
                if($widget_type_another == 'Whatsapp Chat'){
                    $update->selected_package = 'Whatsapp Widget + IMS Pro';
                }
                elseif($widget_type_another == 'All-in-One Chat'){
                    $update->selected_package = 'All In One Widget + IMS Pro';
                }
                $update->package_starting_date = $add_another->created_at;
                $update->package_type = 'Paid';
                $update->expire_date = $add_another->created_at->addDays($days);
                $update->status = 'Enabled';

                Projects::whereId($project_id_req)->update($update->toArray());

            }
            else{

                $update_another = new Widgets;

                if($widget_type_another == 'Whatsapp Chat'){
                    $update_another->category = 'Widgets Plus';
                }elseif($widget_type_another == 'All-in-One Chat'){
                    $update_another->category = 'Widgets Plus';
                }elseif($widget_type_another == 'Analytics'){
                    $update_another->category = 'Analytics';
                }elseif($widget_type_another == 'IMS Pro'){
                    $update_another->category = 'Widgets Plus';
                }

                Widgets::whereId($widget_check_another->id)->update($update_another->toArray());

                // dd($widget_check_another);

                $update = new Projects;
                $update->package_available_days = $days;
                if($widget_type_another == 'All-in-One Chat'){
                    $update->selected_package = 'All In One Widget + IMS Pro';
                }
                $update->package_starting_date = $widget_check_another->created_at;
                $update->package_type = 'Paid';
                $update->expire_date = $widget_check_another->created_at->addDays($days);
                $update->status = 'Enabled';

                Projects::whereId($widget_check_another->project_id)->update($update->toArray());

            }

        }

        DB::table('notifications')->where('user_id',auth()->user()->id)->delete();


        // dd($widget_check);

        if($widget_check != null){
            // dd($widget_check);
            if($widget_type_req == 'Whatsapp Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
            elseif($widget_type_req == 'All-in-One Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
            elseif($widget_type_req == 'Analytics'){
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
            elseif($widget_type_req == 'IMS Pro'){
                // dd($widget_check);
                return redirect()->route('frontend.user.user_widget.settings', $widget_check->id);
            }
        }
        else{
            if($widget_type_req == 'Whatsapp Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
            elseif($widget_type_req == 'All-in-One Chat'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
            elseif($widget_type_req == 'Analytics'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
            elseif($widget_type_req == 'IMS Pro'){
                return redirect()->route('frontend.user.user_widget.settings', $add->id);
            }
        }

        // return back()->with([
        //     'success' => 'success'
        // ]);
    }

    public static function optimizedOptimizerFunction ($project_id_req,$days)
    {
// dd($request);

        // get the current time
        $current = Carbon::now();
        // dd($current);

        $update = new Projects;
        $update->package_available_days = $days;
        $update->selected_package = 'Optimizer';
        $update->package_starting_date = $current;
        $update->package_type = 'Paid';
        $update->expire_date = null;
        $update->status = 'Enabled';

        Projects::whereId($project_id_req)->update($update->toArray());

        $project = Projects::where('id',$project_id_req)->first();
        $update_expire = new Projects;
        $update_expire->expire_date = $project->updated_at->addDays($days);
        Projects::whereId($project_id_req)->update($update_expire->toArray());


        $optimizer_widget_ims_pro = Widgets::where('project_id',$project_id_req)->where('widget_type','IMS Pro')->first();
        $optimizer_widget_all_in_one = Widgets::where('project_id',$project_id_req)->where('widget_type','All-in-One Chat')->first();

        $all_in_one = '[{"whatsapp_details":[null],"fb_details":[null],"telegram_details":[null],"line_details":[null],"viber_details":[null],"tawk_details":[null],"template_layout":"1","whatsapp_number":"079147258369","default_icon":"on","bubble_icon":"envelope-fill","chat_header":"Header All in One","caption":"Typically replies within an hour","image":"3","agent_name":"Yasiru","welcome_message":"Welcome Message! All In One","btn_text":"Start Chat With:","start_chat":"on","show_icon":"on","position":"Floating Bubble","alignment":"right","where_display_chat":"Specific Pages","specific_time_selector":"on","device":["desktop"],"visitors":"all_visitors","date_time":["thursday","friday"],"start_time":"05:20PM","end_time":"08:30PM","timezone":"Asia\/Calcutta","auto_trigger":"on","pop_up_opening_time":"4000","message_auto_reply_time":"6000","scroll_position":"right","exit_internet":"on","notification":["bubble_notification_bage","show_notification_in_tab_tile"],"bubble_background_color":"#055147","bubble_icon_color":"#bfc0bf","header_background_color":"#92967d","enabled_animation":"on","scroll_position_appearance":"Right","custom_css":"No"}]';
        $ims_pro = '[{"whatsapp_number":"0700000000","logo":null,"address":"main street","company_email":"company@company.com"}]';


        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $widget_key = str_shuffle($pin);

        if($optimizer_widget_ims_pro == null){

            $add = new Widgets;
            $add->status = 'Enabled';
            $add->widget_type = 'IMS Pro';
            $add->widget_key = $widget_key;
            $add->load_count = null;
            $add->project_id = $project_id_req;
            $add->settings = $ims_pro;
            $add->category = 'Widgets Plus';

            $add->save();

        }

        $characters_two = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin_two = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters_two[rand(0, strlen($characters_two) - 1)];
        $widget_key_two = str_shuffle($pin_two);

        if($optimizer_widget_all_in_one == null){

            $add_another = new Widgets;
            $add_another->status = 'Enabled';
            $add_another->widget_type = 'All-in-One Chat';
            $add_another->widget_key = $widget_key_two;
            $add_another->load_count = null;
            $add_another->project_id = $project_id_req;
            $add_another->settings = $all_in_one;
            $add_another->category = 'Widgets Plus';

            $add_another->save();

        }
        else{

            $update_another = new Widgets;
            $update_another->category = 'Widgets Plus';

            Widgets::whereId($optimizer_widget_all_in_one->id)->update($update_another->toArray());

        }


        return back()->with([
            'success' => 'success'
        ]);
    }

    public function custom_payment_paypal(Request $request)
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

        // Invoice Function
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('frontend.user.custom_invoice_status',[$request->id,'paid']))
            ->setCancelUrl(route('frontend.user.custom_invoice_status',[$request->id,'paid']));

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


    function create_invoice_status($id,$status)
    {
        if($status == 'paid'){
            BillingInvoice::where('id',$id)->update([
                'status' => 'Completed',
                'payment_status' => 'Paid'
            ]);
            return redirect()->route('frontend.user.view_custom_invoice',$id)->with('message', 'success');;
        }else{
            BillingInvoice::where('id',$id)->update([
                'status' => 'Pending',
                'payment_status' => 'Pending'
            ]);
            return redirect()->route('frontend.user.view_custom_invoice',$id)->with('message', 'IT WORKS!');;
        }
    }

    function custom_payment_stripe(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
