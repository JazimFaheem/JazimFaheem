<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $variation = Variation::with('product')->get();
        return view('admin.pages.products.variations.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::orderby('id','desc')->get();
        return view('admin.pages.products.variations.create',get_defined_vars());
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
        $variation = new Variation;
        $variation->product_id = $request->product_id;
        $variation->attribute = $request->attribute;
        $variation->price = $request->price;
        if($variation->save())
        {
            return back()->toastr('success','Variation Added Successfully!');
        }
        else
        {
            return back()->toastr('error','Something went wrong!');
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
        $products = Product::orderby('id','desc')->get();
        $variation = Variation::find($id);
        return view('admin.pages.products.variations.edit',get_defined_vars());
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
        $variation = Variation::find($id);
        $variation->product_id = $request->product_id;
        $variation->attribute = $request->attribute;
        $variation->price = $request->price;
        if($variation->update())
        {
            return back()->toastr('success','Variation Updated Successfully!');
        }
        else
        {
            return back()->toastr('error','Something went wrong!');
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
    }
}
