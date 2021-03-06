<?php

namespace Modules\Blog\Http\Controllers\Backend;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DataTables;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Category;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('blog::backend.post.index');
    }    

    public function getDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Post::get();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                       
                    if(auth()->user()->can('edit blog posts')){
                        $button = '<a href="'.route('admin.post.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
                    }else{
                        $button = '';
                    }
                    
                    if(auth()->user()->can('delete blog posts')){
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    }else{
                        $button .= '';
                    }
                    
                    return $button;
                })        
                ->addColumn('status', function($data){
                    if($data->status == 'Enabled'){
                        $status = '<span class="badge badge-success">Enabled</span>';
                    }
                    else{
                        $status = '<span class="badge badge-danger">Disabled</span>';
                    }   
                    return $status;
                })
                ->addColumn('featured', function($data){
                    if($data->featured == 'Enabled'){
                        $featured = '<span class="badge badge-success">Enabled</span>';
                    }
                    else{
                        $featured = '<span class="badge badge-danger">Disabled</span>';
                    }   
                    return $featured;
                })    
                ->addColumn('category', function($data){
                    $category = Category::where('id',$data->category)->first();
    
                    if($category) {
                        return $category->name;
                    }
                    else {
                        return '<span class="badge badge-danger">Category not defined</span>';
                    }                  
                }) 
                ->addColumn('feature_image', function($data){
                    $img = '<img src="'.uploaded_asset($data->feature_image).'" style="width: 50%">';
                 
                    return $img;
                })       
                ->rawColumns(['action','status','featured','category','feature_image'])
                ->make(true);
        }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::where('status','Enabled')->get();

        return view('blog::backend.post.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        if($request->description == null){
            return back()->withErrors('Please Fill Description Section');
        }else{

            if($request->feature_image == null){
                return back()->withErrors('Please Add Feature Image');
            }else{         
                
                if($request->featured == 'Enabled')
                {
                    if(Category::where('id',$request->category)->first()->name == 'News'){
                        DB::table('posts')->where('featured','Enabled')->where('category',$request->category)->update(array('featured' => 'Disabled'));           
                    }
                    elseif(Category::where('id',$request->category)->first()->name == 'Promotions'){                        
                        DB::table('posts')->where('featured','Enabled')->where('category',$request->category)->update(array('featured' => 'Disabled'));           
                    }
                    elseif(Category::where('id',$request->category)->first()->name == 'Blogs'){
                        DB::table('posts')->where('featured','Enabled')->where('category',$request->category)->update(array('featured' => 'Disabled'));           
                    }
                } 
               
                $add = new Post;

                $add->title=$request->title; 
                $add->description=$request->description;        
                $add->category=$request->category;        
                $add->slug=$request->slug;        
                $add->feature_image=$request->feature_image;
                $add->order=$request->order;
                $add->featured=$request->featured;
                $add->status=$request->status;
                $add->save();

                return redirect()->route('admin.post.index')->withFlashSuccess('Added Successfully');  
            }
            
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $post = Post::where('id',$id)->first(); 
        $categories = Category::where('status','Enabled')->get();

        return view('blog::backend.post.edit',[
            'post' => $post,
            'categories' => $categories
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
        // dd($request);
        if($request->description == null){
            return back()->withErrors('Please Fill Description Section');
        }else{

            if($request->feature_image == null){
                return back()->withErrors('Please Add Feature Image');
            }else{           
                
                if($request->featured == 'Enabled')
                {
                    if(Category::where('id',$request->category)->first()->name == 'News'){
                        DB::table('posts')->where('featured','Enabled')->where('category',$request->category)->update(array('featured' => 'Disabled'));           
                    }
                    elseif(Category::where('id',$request->category)->first()->name == 'Promotions'){                        
                        DB::table('posts')->where('featured','Enabled')->where('category',$request->category)->update(array('featured' => 'Disabled'));           
                    }
                    elseif(Category::where('id',$request->category)->first()->name == 'Blogs'){
                        DB::table('posts')->where('featured','Enabled')->where('category',$request->category)->update(array('featured' => 'Disabled'));           
                    }
                } 
               
                $update = new Post;

                $update->title=$request->title; 
                $update->description=$request->description;        
                $update->category=$request->category;        
                $update->slug=$request->slug;        
                $update->feature_image=$request->feature_image;
                $update->order=$request->order;
                $update->featured=$request->featured;
                $update->status=$request->status;

                Post::whereId($request->hidden_id)->update($update->toArray());

                return redirect()->route('admin.post.index')->withFlashSuccess('Updated Successfully');  
            }
            
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete(); 
    }
}
