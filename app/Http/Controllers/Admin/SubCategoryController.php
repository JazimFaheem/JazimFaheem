<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategories = SubCategory::all();

        return view('admin.pages.subcategories.index', get_defined_vars());
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
        $subcategories = SubCategory::with('category')->get();
        return view('admin.pages.subcategories.create', get_defined_vars());
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
        $subcategory = new SubCategory;
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $subcategoryimage = uniqid() . '.' . $file->guessExtension();
            $image_path = $file->move(public_path() . '/assets/images/products/subcategories', $subcategoryimage);
            $subcategory->image = $subcategoryimage;
        }
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->slug = \Str::slug($request->name);
        $subcategory->description = $request->description;
        // dd($subcategory);
        if ($subcategory->save()) {
            return back()->with('success', 'SubCategory Added Successfully!');
        } else {
            return back()->with('error', 'Something went wrong!');
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
        $categories = Category::all();
        $subcategory = SubCategory::with('category')->where('id',$id)->first();

        return view('admin.pages.subcategories.edit', get_defined_vars());


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
        $subcategory = SubCategory::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $subcategoryimage = uniqid() . '.' . $file->guessExtension();
            $image_path = $file->move(public_path() . '/assets/images/products/subcategories', $subcategoryimage);
            $subcategory->image = $subcategoryimage;
        }
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->slug = \Str::slug($request->name);
        $subcategory->description = $request->description;
        if ($subcategory->update()) {
            return redirect()->route('subcategories.create')->with('success', 'Sub Category Updated Successfully!');
        } else {
            return back()->with('error', 'Something went wrong!');
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
        $subcategory = SubCategory::find($id);
        if ($subcategory->delete()) {
            return back()->with('success', 'SubCategory deleted successfully!');
        } else {
            return back()->with('error', 'Something went wrong!');
        }
    }

}