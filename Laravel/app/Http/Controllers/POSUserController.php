<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSUserController extends Controller
{
    public function user($id=null, $name=null){
        return view('pos.user')
            ->with('id',$id )
            ->with('name', $name);
    }
}
