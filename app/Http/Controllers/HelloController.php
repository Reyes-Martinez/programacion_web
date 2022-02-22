<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello3()
    {
        return '<h3>Hello</h3>';
    }
    public function hello4()
    {
        return view('hello4');
    }
    public function hello5($firsname = 'null', $lastname = 'null')
    {
        return view('hello5', ['fullname' => $firsname . ' ' . $lastname]);
    }
}
