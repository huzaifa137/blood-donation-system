<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkvalidation extends Controller
{
    function formdata(Request $request)
    {
        $alldata=$request->validate([
            'name' => 'required',
           
        ]);

        return "The data has been successfully submitted !!!";
    }
}
