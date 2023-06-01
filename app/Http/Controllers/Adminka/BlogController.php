<?php

namespace App\Http\Controllers\Adminka;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::get();
        return view('dashboard.blog.index',compact('blogs'));
    }


    public function create()
    {
        return view('dashboard.blog.create');

    }


    public function store(BlogRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('img') ){
            $name = 'img'.time().'.'.$request->file('img')->extension(); //sekil adi

            $request->file('img')->move(public_path().'/back/',$name); //seklin yolu
            $validated = array_merge($request->validated(),['img'=>$name]);
        }

        $mesaj = array(
            'bildirim'=>'Məlumatlar uğurla əlavə edildi',
            'alert-type'=>'success'
        );

        Blog::create($validated);
        return redirect()->route('admin.blog.index')->with($mesaj);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.blog.edit',compact('blog'));
    }


    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        $validated = $request->validated();
        if ($request->hasFile('img') ){
            $name = 'img'.time().'.'.$request->file('img')->extension(); //sekil adi

            $request->file('img')->move(public_path().'/back/',$name); //seklin yolu
            $validated = array_merge($request->validated(),['img'=>$name]);
        }

        $mesaj = array(
            'bildirim'=>'Məlumatlar uğurla əlavə edildi',
            'alert-type'=>'success'
        );

        $blog->update($validated);
        return redirect()->route('admin.blog.index')->with($mesaj);
    }


    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->route('admin.blog.index');
    }
}
