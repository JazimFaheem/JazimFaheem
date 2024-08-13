<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function SiteSetting()
    {
        $settings = GeneralSetting::find(1);
        return view('admin.pages.general-settings',compact('settings'));
    }

    public function storeSetting(Request $request)
    {
        // dd($request);
        $setting = new GeneralSetting;
        
           
            $main_logo = $request->file('main_logo');
            $footer_logo = $request->file('footer_logo');
            $favicon = $request->file('favicon');
            
            if($main_logo)
            {
                $mainimage = $main_logo->getClientOriginalName();
            $mainimage_path = $main_logo->move(public_path().'/assets/images/logos/',$mainimage);
             $setting->main_logo = $mainimage;
            }
            if($footer_logo)
            {
                $footerimage = $footer_logo->getClientOriginalName();
            $footerimage_path = $footer_logo->move(public_path().'/assets/images/logos/',$footerimage);
            $setting->footer_logo = $footerimage;
            }
            if($favicon)
            {
                 $faviconimage = $favicon->getClientOriginalName();
            $footerimage_path = $favicon->move(public_path().'/assets/images/logos/',$faviconimage);
             $setting->favicon = $faviconimage;
            }


            $setting->main_logo = $mainimage;
            $setting->footer_logo = $footerimage;
            $setting->favicon = $faviconimage;
            $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->linkedin = $request->linkedin;
            $setting->instagram = $request->instagram;
            $setting->pinterest = $request->pinterest;
            $setting->youtube = $request->youtube;
            $setting->email = $request->email;
            $setting->phone = $request->phone;
            $setting->whatsapp = $request->whatsapp;
            $setting->address = $request->address;
            $setting->site_title = $request->site_title;
            $setting->meta_title = $request->meta_title;
            $setting->meta_tags = $request->meta_tags;
            $setting->meta_description = $request->meta_description;
            $setting->meta_keywords = $request->meta_keywords;
            $setting->about = $request->about;
            $setting->created_at = \Carbon\Carbon::now();
        if( $setting->save() ){
            toastr()->success('Settings Add Successfully');
            return back();
        }
        else{
            toastr()->error('Something went wrong');
            return back();
        }
        
    }

    public function UpdateSetting(Request $request)
    {
        // dd($request);
        $setting = GeneralSetting::find($request->id);
        
        if($request->hasfile('main_logo') || $request->hasfile('footer_logo') || $request->hasfile('favicon'))
        {
            $main_logo = $request->file('main_logo');
            $footer_logo = $request->file('footer_logo');
            $favicon = $request->file('favicon');
            if($main_logo)
            {
                $mainimage = $main_logo->getClientOriginalName();
            $mainimage_path = $main_logo->move(public_path().'/assets/images/logos/',$mainimage);
             $setting->main_logo = $mainimage;
            }
            if($footer_logo)
            {
                $footerimage = $footer_logo->getClientOriginalName();
            $footerimage_path = $footer_logo->move(public_path().'/assets/images/logos/',$footerimage);
            $setting->footer_logo = $footerimage;
            }
            if($favicon)
            {
                 $faviconimage = $favicon->getClientOriginalName();
            $footerimage_path = $favicon->move(public_path().'/assets/images/logos/',$faviconimage);
             $setting->favicon = $faviconimage;
            }
           

           
            
           
            $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->linkedin = $request->linkedin;
            $setting->instagram = $request->instagram;
            $setting->pinterest = $request->pinterest;
            $setting->youtube = $request->youtube;
            $setting->email = $request->email;
            $setting->phone = $request->phone;
            $setting->whatsapp = $request->whatsapp;
            $setting->address = $request->address;
            $setting->site_title = $request->site_title;
            $setting->meta_title = $request->meta_title;
            $setting->meta_tags = $request->meta_tags;
            $setting->meta_description = $request->meta_description;
            $setting->meta_keywords = $request->meta_keywords;
            $setting->about = $request->about;
            $setting->updated_at = \Carbon\Carbon::now();
            if( $setting->save() ){
                toastr()->success('Settings Updated Successfully');
                return back();
            }
            else{
                toastr()->error('Something went wrong');
                return back();
            }
        }
        else
        {
           $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->linkedin = $request->linkedin;
            $setting->instagram = $request->instagram;
            $setting->pinterest = $request->pinterest;
            $setting->youtube = $request->youtube;
            $setting->email = $request->email;
            $setting->phone = $request->phone;
            $setting->whatsapp = $request->whatsapp;
            $setting->address = $request->address;
            $setting->site_title = $request->site_title;
            $setting->meta_title = $request->meta_title;
            $setting->meta_tags = $request->meta_tags;
            $setting->meta_description = $request->meta_description;
            $setting->meta_keywords = $request->meta_keywords;
            $setting->about = $request->about;
            $setting->updated_at = \Carbon\Carbon::now();
            if( $setting->save() ){
                toastr()->success('Settings Updated Successfully');
                return back();
            }
            else{
                toastr()->error('Something went wrong');
                return back();
            }
        }
    }
}
