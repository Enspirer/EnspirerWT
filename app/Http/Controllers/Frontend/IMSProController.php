<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Widgets;
use App\Models\IMSProUsers;
use DataTables;
use Modules\WidgetManager\Entities\ImsClients;
use Illuminate\Support\Facades\Hash;
use Cart;

class IMSProController extends Controller
{    
    public function ims_pro_media_scan($id)
    {     

        $itemsCart = Cart::getContent();

        if(count($itemsCart) == 0){
            return redirect()->route('frontend.ims_login_page');  
        }


        $project = Projects::where('id',$id)->first();  
        // dd($project);

        return view('frontend.ims_pro.ims_pro_media_scan',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_index($id)
    {     
        $itemsCart = Cart::getContent();

        if(count($itemsCart) == 0){
            return redirect()->route('frontend.ims_login_page');  
        }

        $project = Projects::where('id',$id)->first();           
        // dd($project->id);

        return view('frontend.ims_pro.user_widget_ims_index',[
            'project_id' => $project->id,
            'project' => $project         
        ]);
    }    

    public function ims_pro_chat_summary($id)
    {     
        $itemsCart = Cart::getContent();

        if(count($itemsCart) == 0){
            return redirect()->route('frontend.ims_login_page');  
        }

        $project = Projects::where('id',$id)->first();  

        return view('frontend.ims_pro.ims_pro_chat_summary',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

    public function ims_pro_inquiry_summary($id)
    {     
        $itemsCart = Cart::getContent();

        if(count($itemsCart) == 0){
            return redirect()->route('frontend.ims_login_page');  
        }
        
        $project = Projects::where('id',$id)->first();  

        return view('frontend.ims_pro.ims_pro_inquiry_summary',[
            'project_id' => $project->id,
            'project' => $project          
        ]);
    }

  

    


}
