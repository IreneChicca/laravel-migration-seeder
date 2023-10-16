<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function showTrain()
    {
      $title = "Trains";

      $trains = Train::all();
      $trainsToday = Train::where('start_date','=', '2023-10-16')->get();
      
      
      return view('trains', compact('title','trains','trainsToday'));
    }
}