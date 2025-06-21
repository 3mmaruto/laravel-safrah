<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
class TripController extends Controller
{
    public function index()
{
    $trips = Trip::all();
    return response()->json($trips);
}
   
}
