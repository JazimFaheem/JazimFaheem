<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::get();
        return view('admin.pages.banners.banner-list', get_defined_vars());
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
        $banner = new Banner;
        if ($request->hasFile('banner')) {

            $file = $request->file('banner');
            $bannerimg = uniqid() . '.' . $file->guessExtension();
            $image_path = $file->move(public_path() . '/assets/images/banners', $bannerimg);
            $banner->banner = $bannerimg;
        }
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->url = $request->url;
        if ($banner->save()) {
            return back()->with('success', 'Banner added successfully!');
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
        $banner = Banner::find($id);
        return view('admin.pages.banners.edit-banner', get_defined_vars());
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
        $banner = Banner::find($id);
        if ($request->hasFile('banner')) {

            $file = $request->file('banner');
            $bannerimg = uniqid() . '.' . $file->guessExtension();
            $image_path = $file->move(public_path() . '/assets/images/banners', $bannerimg);
            $banner->banner = $bannerimg;
        }
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->url = $request->url;
        if ($banner->update()) {
            return redirect()->route('banners.index')->with('success', 'Banner updated successfully!');
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
        $banner = Banner::find($id);
        if($banner->delete())
        {
            return back()->with('success','Banner deleted successfully!');
        }
        else
        {
            return back()->with('error','Something went wrong!');
        }
    }
}
