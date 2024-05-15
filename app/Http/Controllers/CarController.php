<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;

class CarController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Car::class, 'car');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view("car.index", ["cars"=> $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("car.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $file = $request->file('car_avatar'); // Используйте правильное имя поля
        $newName = uniqid() . '.' . $file->getClientOriginalExtension(); // Получите расширение оригинального файла
        $path = $file->storeAs("cars_avatars", $newName, "public"); // Сохраните файл
        $car = Car::create([
            "model_name" => $request['model_name'],
            'price' => $request['price'],
            'category' => $request['category'],
            'path_to_file' => $path,

        ]);
        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
