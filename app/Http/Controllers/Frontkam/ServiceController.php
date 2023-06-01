<?php

namespace App\Http\Controllers\Frontkam;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $services = Service::get();
        return view('front.service.index',compact('services'));
    }

    public function detail(Request $request,$lang, $slug){
        $service = Service::where('slug_'.app()->getLocale(), $slug)->firstOrFail();
        $services = Service::where('id', '!=', $service->id)->get();
        return view('front.service.detail',compact('service','services'));
    }
}
