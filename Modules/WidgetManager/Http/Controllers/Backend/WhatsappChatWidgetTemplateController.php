<?php

namespace Modules\WidgetManager\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WidgetManager\Entities\WhatsappChatWidgetTemplate;
use DataTables;

class WhatsappChatWidgetTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('widgetmanager::backend.whatsappchat_widget.index');
    }

    public function getDetails(Request $request)
    {
        $data = WhatsappChatWidgetTemplate::get();
        // dd($data);
        return DataTables::of($data)
                
            ->addColumn('status', function($data){
                if($data->status == 'Enabled'){
                    $status = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $status = '<span class="badge badge-danger">Disabled</span>';
                }   
                return $status;
            })
            ->addColumn('image', function($data){
                $img = '<img src="'.uploaded_asset($data->image).'" style="width: 50%">';
             
                return $img;
            })
            ->addColumn('action', function($data){
                $btn = '<a href="'.route("admin.whatsappchat_widget.edit",$data->id).'" class="edit btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $btn;
             })                               
            ->rawColumns(['action','status','image'])
            ->make(true);
      
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('widgetmanager::backend.whatsappchat_widget.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        if($request->image == null){
            return back()->withErrors('Insert a Screen Shot');
        }  

        $add = new WhatsappChatWidgetTemplate;

        $add->name = $request->name;        
        $add->description = $request->description;
        $add->image = $request->image;
        $add->source = $request->source;
        $add->user_id = auth()->user()->id;
        $add->status = $request->status;

        $add->save();

        return redirect()->route('admin.whatsappchat_widget.index')->withFlashSuccess('Added Successfully'); 
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('widgetmanager::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $whatsapp_chat = WhatsappChatWidgetTemplate::where('id',$id)->first(); 

        return view('widgetmanager::backend.whatsappchat_widget.edit',[
            'whatsapp_chat' => $whatsapp_chat
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        if($request->image == null){
            return back()->withErrors('Insert a Screen Shot');
        }  
        
        $update = new WhatsappChatWidgetTemplate;

        $update->name = $request->name;        
        $update->description = $request->description;
        $update->image = $request->image;
        $update->source = $request->source;
        $update->user_id = auth()->user()->id;
        $update->status = $request->status;

        WhatsappChatWidgetTemplate::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.whatsappchat_widget.index')->withFlashSuccess('Updated Successfully');    
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        WhatsappChatWidgetTemplate::where('id', $id)->delete(); 
    }
}
