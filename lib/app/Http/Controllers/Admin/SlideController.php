<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddSlideRequest;
use App\Models\Slide;


class SlideController extends Controller
{
    //
    public function getSlide()
    {
    	$data['slidelist'] = Slide::all();
    	return view('backend.slide',$data);
    }

    public function postSlide(AddSlideRequest $request)
    {
    	$filename = $request->img->getClientOriginalName();
    	$slide = new Slide;
    	$slide->img = $filename;
    	$slide->save();
    	$request->img->storeAs('slide', $filename);
    	return back();
    }

    public function getDeleteSlide($id)
    {
    	Slide::destroy($id);
        return back();
    }
}
