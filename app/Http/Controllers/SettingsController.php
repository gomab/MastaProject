<?php

namespace App\Http\Controllers;

use App\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * SettingsController constructor.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $setting = Setting::first();

        return view('admin.setting.settings', compact('setting'));
    }


    public function update(Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'about' => 'required',
            //'logo'  => 'required|image',
            //'favicon' => 'required|image'

        ]);

        $setting = Setting::first();

        //Upload logo
        $logo = $request->file('logo');
        $slug = str_slug($request->name);
        if(isset($logo)){
            $currentDate = Carbon::now()->toDateString();
            $logoname = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $logo->getClientOriginalExtension();

            if(!file_exists('uploads/setting')){
                mkdir('uploads/setting', 0777, true);
            }
            $logo->move('uploads/setting',$logoname);
        }else{
            $logoname = $setting->logo;
        }

        //Upload favicon
        $favicon = $request->file('favicon');
        $slug = str_slug($request->name);
        if(isset($favicon)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $favicon->getClientOriginalExtension();

            if(!file_exists('uploads/setting')){
                mkdir('uploads/setting', 0777, true);
            }
            $favicon->move('uploads/category',$imagename);
        }else{
            $imagename = $setting->favicon;
        }



        $setting->name    = request()->name;
        $setting->number  = request()->number;
        $setting->email   = request()->email;
        $setting->address = request()->address;
        $setting->about   = $request->about;
        $setting->favicon = $imagename;
        $setting->logo    = $logoname;
        $setting->save();

        Toastr::success('Setting MAJ.', 'Title', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }
}
