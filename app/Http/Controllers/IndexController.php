<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $latestNews = News::latest()->take(4)->get();
        return response()->view("index", ['latestNews' => $latestNews]); // , ['cars' => Car::latest()->get()->orderBy('id')]
    }
}
