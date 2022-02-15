<?php

namespace Modules\WidgetManager\Http\Controllers\Frontend;

use App\Models\Widgets;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($id)
    {
        // repalce venue info in the javascript as an object

        $widgetsPlanes = Widgets::where('id',$id)->first()->settings;
        $widpan = json_decode($widgetsPlanes);
        $widgetJsonOutput = $widpan[0];





        return response()
            ->view('widgetmanager::dynamic_js.whatsapp_chat_widget', ['widget_meta' => $widgetJsonOutput])
            ->withHeaders([
                'Content-Type' => 'application/javascript',
                'X-Venue-ID' => 'function_api'
            ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('widgetmanager::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
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
        return view('widgetmanager::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
