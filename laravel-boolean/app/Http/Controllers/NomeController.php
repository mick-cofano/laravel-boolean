<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomeController extends Controller
{
    //


    public function index() {
      return view( 'test-controller.index');
    }
}
