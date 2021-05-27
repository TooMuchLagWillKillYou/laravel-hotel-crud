<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MyController extends Controller
{
    public function home(){

        return view('pages.home');
    }
}
