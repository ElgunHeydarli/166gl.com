<?php

namespace App\Http\Controllers\Adminka;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        return view('dashboard.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('dashboard.slider.create');

    }


    public function store(SliderRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image') ){
            $name = 'image'.time().'.'.$request->file('image')->extension(); //sekil adi

            $request->file('image')->move(public_path().'/back/',$name); //seklin yolu
            $validated = array_merge($request->validated(),['image'=>$name]);
        }
        Slider::create($validated);

        $mesaj = array(
            'bildirim'=>'Məlumatlar uğurla əlavə edildi',
            'alert-type'=>'success'
        );

        return redirect()->route('admin.slider.index')->with($mesaj);
    }


    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('dashboard.slider.edit', compact('slider'));
    }



    public function update(SliderRequest $request, $id)
    {
        $slider = Slider::find($id);
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

        $slider->update($validated);

        return redirect()->route('admin.slider.index')->with($mesaj);
    }


    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->route('admin.slider.index');
    }

}
