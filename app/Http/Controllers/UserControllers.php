<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    function showData(Request $request){

        $request->validate([
            'skill'=>'required'
        ]);

        return $request;
    }
}
