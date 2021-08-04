<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function testrequest(Request $req){
        $data = $req-> input('username');
        $req->session()->put('username',$data);
        return redirect('profile');
    }
}
