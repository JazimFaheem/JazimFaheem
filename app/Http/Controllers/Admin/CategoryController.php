<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.pages.categories.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.pages.categories.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = new Category;
        if($request->hasFile('icon')){

    		$file = $request->file('icon');
	    	$categoryimage = uniqid().'.'.$file->guessExtension();
	    	$image_path = $file->move(public_path().'/assets/images/products/categories',$categoryimage);
	    	$category->image = $categoryimage;
        }
            $category->name = $request->name;
            $category->slug = \Str::slug($request->name);
            $category->description = $request->description;
            if($category->save())
            {
                return back()->with('success','Category Added Successfully!');
            }
            else
            {
                return back()->with('error','Something went wrong!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
       
        return view('admin.pages.categories.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $category =  Category::find($id);
        if($request->hasFile('icon')){

    		$file = $request->file('icon');
	    	$categoryimage = uniqid().'.'.$file->guessExtension();
	    	$image_path = $file->move(public_path().'/assets/images/products/categories',$categoryimage);
	    	$category->image = $categoryimage;
        }
            $category->name = $request->name;
            $category->slug = \Str::slug($request->name);
            $category->description = $request->description;
            if($category->update())
            {
                return redirect()->route('categories.create')->with('success','Category Updated Successfully!');
            }
            else
            {
                return back()->with('error','Something went wrong!');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        if($category->delete())
        {
            return back()->with('success','Category deleted successfully!');
        }
        else
        {
            return back()->with('error','Something went wrong!');
        }
    }
}
