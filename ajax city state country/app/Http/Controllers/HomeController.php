<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index() {
        $country = \App\Country::all()->pluck('country_name','id');
        $country->prepend('Select Country',0);
        return view('index',  compact('country'));
    }
    public function getStateList(Request $request)
    {
        $states = \App\State::all()->where('countries_id', $request->country_id)->pluck('state_name','id');
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
        $city = \App\City::all()->where('states_id', $request->state_id)->pluck('city_name','id');
        return response()->json($city);
    }
    public function getFile(Request $request)
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move('images',$fileName);
        $all = $request->all();
        $all['file'] =  $fileName;
        \App\Image::create($all);
        return redirect('test');
    }

}
