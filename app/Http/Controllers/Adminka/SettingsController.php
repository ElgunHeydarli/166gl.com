<?php

namespace App\Http\Controllers\Adminka;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index()
    {
        $setting = Settings::find(1);
        return view('dashboard.setting.index',compact('setting'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(SettingRequest $request)
    {
        $setting = Settings::find(1);

        $setting->title = $request->title;
        $setting->adress_pl = $request->adress_pl;
        $setting->adress_en = $request->adress_en;
        $setting->adress_ru = $request->adress_ru;
        $setting->email = $request->email;
        $setting->issaati = $request->issaati;
        $setting->phone = $request->phone;
        $setting->facebook = $request->facebook;
        $setting->linkedin = $request->linkedin;
        $setting->instagram = $request->instagram;
        $setting->whatshapp = $request->whatshapp;


        if ($request->hasFile('image') ){
            $fileName = 'image'.time().'.'.$request->image->extension();
            $fileNameWithUpload = 'storage/uploads/settings'.$fileName;

            $request->image->storeAs('public/uploads/settings',$fileName);

            $setting->image = $fileNameWithUpload;
        }
        $mesaj = array(
            'bildirim'=>'Məlumatlar uğurla əlavə edildi',
            'alert-type'=>'success'
        );

        $setting->save();

        return redirect()->back()->with('success','Məlumatlar uğurla yeniləndi')->with($mesaj);

    }


    public function destroy($id)
    {
        //
    }
}
