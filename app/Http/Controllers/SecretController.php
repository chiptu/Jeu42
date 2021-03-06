<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
        if ($request->user != config('secret.user') &&  $request->password != config('secret.password')) {
            return view('secret');
        } 
        else
        {
            return view('secretwin');
        }
    }
}
