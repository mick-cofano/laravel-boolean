<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    //


    public function index() {

      $cars = Car::all();
      // dump($cars);


      return view( 'cars-controller.index', ['cars' => $cars]);
    }
}
