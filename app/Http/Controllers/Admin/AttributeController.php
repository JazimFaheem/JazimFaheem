<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $latestattribute = \DB::table('product_attributes')->select('id')->orderBy('id', 'DESC')->first();
        // dd($request->all());
        $attributes = array();
        foreach($request->input('attribute_name') as $key => $value) {
            // $attributes = new ProductAttribute;
            // $attributes->name = $request->get('attribute_name')[$key];
            // $attributes->values = $request->get('attribute_value')[$key];
            // $attributes->is_visible = $request->get('attribute_is_visible')[$key];
            // $attributes->is_for_variation = $request->get('attribute_for_variation')[$key];
            // $insert = $attributes->save();
            $attributes[] = [
                'name' => $request->get('attribute_name')[$key],
                'values' => $request->get('attribute_value')[$key],
                'is_visible' => $request->get('attribute_is_visible')[$key],
                'is_for_variation' => $request->get('attribute_for_variation')[$key]
            ];
            
        }
        if($attributes)
        {
            // return response()->json(['status'=>200,'message'=> 'Successfull!']);
            // $attributes_result = \DB::table('product_attributes')->select('id')->where('id', '>', $latestattribute->id)->get();
            // dd($attributes_result);
            session()->put('attributes',$attributes);
            return view('admin.responses.attributes');
        }
        else{
            return response()->json(['status'=>400,'message'=> 'Failed!']);
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
