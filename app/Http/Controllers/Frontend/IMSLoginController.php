<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\IMSProUsers;
use App\Models\Projects;
use Illuminate\Support\Facades\Hash;
use Cart;

class IMSLoginController extends Controller
{
  
    public function login_page($id)
    {
        $project = Projects::where('id',$id)->first();

        if($project == null){      
            return redirect()->route('frontend.not_found');
        }


        $itemsCart = Cart::getContent();
        // dd($itemsCart);

        if(count($itemsCart) != 0){
            foreach($itemsCart as $items){

                $user = IMSProUsers::where('id',$items->id)->first();  

                return redirect()->route('frontend.user_widget.ims_pro_media_scan',$user->project_id); 
                break;
            }
        }
        
        return view('frontend.ims_pro.auth.login',[
            'project' => $project
        ]);
    }   

    public function ims_login_check(Request $request) {   

        $email = $request->email;  
        $password = $request->password;     
        $hidden_project_id = $request->hidden_id;     

        $user = IMSProUsers::where('email',$email)->where('project_id',$hidden_project_id)->first();  
        // dd($user);

        if($user == null){           
            return back()->with([
                'error' => 'These credentials do not match our records.'
            ]); 
        }
        else{
            $hash_pw = Hash::check($password, $user->password);
            // dd($hash_pw);

            if($hash_pw === true){

                $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $symbols = '@#$%^&*';
                $pin_number = mt_rand(10000, 99999)
                    . mt_rand(10000, 99999)
                    . $symbols[rand(0, strlen($symbols) - 1)]
                    . $letters[rand(0, strlen($letters) - 1)];
                $session = str_shuffle($pin_number);

                $update = new IMSProUsers;

                $update->session=$session;

                IMSProUsers::whereId($user->id)->update($update->toArray());

                Cart::add($user->id, $user->name, $session, 1);

                return redirect()->route('frontend.user_widget.ims_pro_media_scan',$user->project_id);  
            }
            else{
                return back()->with([
                    'error' => 'These credentials do not match our records.'
                ]); 
            }                      
        }   

    }


    public function ims_pro_logout($id)
    {           
        Cart::remove($id);

        $user = IMSProUsers::where('id',$id)->first();  

        return redirect()->route('frontend.ims_login_page',$user->project_id);
    }
      

 
}
