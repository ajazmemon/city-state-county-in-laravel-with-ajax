<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller {

    public function index() {
        return view('image');
    }

    public function fileUpload(Request $request) {
        $all = $request->all();
        $image = $request->image;
        $nm = time() . $image->getClientOriginalName();
        $image->move('images', $nm);
        $all['image'] = $nm;
        \App\image::create($all);
        return response()->json(['success'=>'Register Sucessfuly']);
    }

}
