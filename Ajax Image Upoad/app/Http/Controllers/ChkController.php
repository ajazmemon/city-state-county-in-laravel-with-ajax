<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChkController extends Controller
{
    public function index()
    {
        return view('chk');
    }
    public function getUser()
    {
        $user = \App\Chk::all();
        return response()->json($user);
    }
    public function getId($id)
    {
        exit($id);
    }
}
