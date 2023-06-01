<?php

namespace App\Http\Controllers\Adminka;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::find(1);
        return view('dashboard.about.index',compact('about'));
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


    public function update(AboutRequest $request)
    {
        $about = About::find(1);
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
        $about->update($validated);
        return redirect()->back()->with('success','Məlumatlar uğurla yeniləndi')->with($mesaj);

    }


    public function destroy($id)
    {
        //
    }
}
