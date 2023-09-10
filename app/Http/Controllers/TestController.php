<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hi(){
        return 'hi';
    }
    public function hello(){
        return 'hello';
    }
}
