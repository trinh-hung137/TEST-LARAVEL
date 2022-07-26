<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function testFunction()
    {
        return 2;
    }
    public function tesAbc()
    {
        $data_user  = User::all();
        return view('test',[
            'data' => $data_user
        ]);
    }
}
