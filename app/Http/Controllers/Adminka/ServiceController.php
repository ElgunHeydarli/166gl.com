<?php

namespace App\Http\Controllers\Adminka;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::get();
        return view('dashboard.service.index',compact('services'));
    }


    public function create()
    {
        return view('dashboard.service.create');
    }


    public function store(ServiceRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image') ){
            $name = 'image'.time().'.'.$request->file('image')->extension(); //sekil adi

            $request->file('image')->move(public_path().'/back/',$name); //seklin yolu
            $validated = array_merge($request->validated(),['image'=>$name]);
        }
        Service::create($validated);
        $mesaj = array(
            'bildirim'=>'Məlumatlar uğurla əlavə edildi',
            'alert-type'=>'success'
        );

        return  redirect()->route('admin.service.index')->with($mesaj);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $service = Service::find($id);
        return view('dashboard.service.edit',compact('service'));
    }


    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $validated = $request->validated();
        if ($request->hasFile('image') ){
            $name = 'image'.time().'.'.$request->file('image')->extension(); //sekil adi

            $request->file('image')->move(public_path().'/back/',$name); //seklin yolu
            $validated = array_merge($request->validated(),['image'=>$name]);
        }
        $mesaj = array(
            'bildirim'=>'Məlumatlar uğurla əlavə edildi',
            'alert-type'=>'success'
        );
        $service->update($validated);

        return redirect()->route('admin.service.index')->with($mesaj);
    }


    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->route('admin.service.index')->with('success','Ugurla silindi');
    }
}
