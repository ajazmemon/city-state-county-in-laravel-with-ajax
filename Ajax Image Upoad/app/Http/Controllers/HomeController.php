<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function showList()
    {
        $users = \App\User::all()->pluck('name','id');
        return view('user',  compact('users'));
    }
    public function user($id)
    {
        $users = \App\User::find($id);
        return response()->json($users);
    }
    public function saveData(Request $request)
    {
        $user = \App\User::find($request->id);
        $user->update($request->all());
        echo "done";
    }
}
