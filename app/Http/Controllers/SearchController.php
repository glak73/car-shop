<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $query = $request->input('query');
        $cars = Car::where('model_name','LIKE','%'.$query. '%')->get();

        return view('search.result', ['context' => $cars]);
    }
}
