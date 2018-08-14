<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\invite;
class InviteUserController extends Controller {

    public function index() {
        return view('inviteuser');
    }

    public function InviteCreate(Request $request) {
        $email = $request->email;
        $chk = \App\InviteUser::all()->where('email', $email);

        if (count($chk) > 0) {
            return response()->json(['error' => true, 'message' => 'Already Invited User']);
        } else {
            $all = $request->all();
            $all['token'] = md5(uniqid(rand(), true));
            \App\InviteUser::create($all);
            
//            $a = ['token'=>$all['token']];
            
            \Mail::to($request->email)->send(new invite(['token'=>$all['token']]));
            return response()->json(['error'=>false,'message'=>'Email is sent to the Use']);
        }
    }

}
