<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModalRequest;

class ModalController extends Controller
{
    public function index()
    {
        $city = \App\City::all()->pluck('name','id')->prepend('Select…', '');
        
        return view('Modal',  compact('city'));
    }
    public function saveForm(ModalRequest $request)
    {
        $all = $request->all(); 
        $a = $all['hobby'];
        $all['hobby'] = implode(',',$a);
        $all['password'] = md5($all['password']);
        \App\Reg::create($all);
        return response()->json(['error'=>'true','message'=>'User Created Successfully']);
    }
}
