<?php

namespace Modules\WidgetManager\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WidgetManager\Entities\ImsClients;
use DataTables;
use App\Models\Projects;
use App\Models\Widgets;

class ImsClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($id)
    {
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();   

        return view('widgetmanager::backend.ims.index',[
            'project' => $project,
            'widget' => $widget
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create($id)
    {
        $widget = Widgets::where('id',$id)->first();
        $project = Projects::where('id',$widget->project_id)->first();

        return view('widgetmanager::backend.ims.create',[
            'project' => $project,
            'widget' => $widget
        ]);
    }

    public function getDetails(Request $request, $id)
    {
        $data = ImsClients::where('widget_id',$id)->get();
        // dd($data);
        return DataTables::of($data)
        
            ->addColumn('action', function($data){
                $btn = '<a href="'.route("admin.ims.edit",$data->id).'" class="edit btn btn-secondary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $btn;
             })                               
            ->rawColumns(['action'])
            ->make(true);
      
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $add = new ImsClients;

        $add->client_name = $request->client_name;        
        $add->client_email = $request->client_email;
        $add->ip_address = $request->ip_address;
        $add->project_id = $request->hidden_project_id;
        $add->widget_id = $request->hidden_widget_id;
        $add->assign_by = $request->assign_by;
        $add->message = $request->message;

        $add->save();

        return redirect()->route('admin.ims.index',$request->hidden_widget_id)->withFlashSuccess('Added Successfully'); 
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
        $ims = ImsClients::where('id',$id)->first(); 
        $widget = Widgets::where('id',$ims->widget_id)->first();
        $project = Projects::where('id',$ims->project_id)->first();


        return view('widgetmanager::backend.ims.edit',[
            'ims' => $ims,
            'widget' => $widget,
            'project' => $project
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
        $update = new ImsClients;

        $update->client_name = $request->client_name;        
        $update->client_email = $request->client_email;
        $update->ip_address = $request->ip_address;
        $update->project_id = $request->hidden_project_id;
        $update->widget_id = $request->hidden_widget_id;
        $update->assign_by = $request->assign_by;
        $update->message = $request->message;

        ImsClients::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.ims.index',$request->hidden_widget_id)->withFlashSuccess('Updated Successfully');  
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        ImsClients::where('id', $id)->delete(); 
    }
}
