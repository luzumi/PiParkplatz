<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CarController extends Controller
{
    protected function car_list()
    {
        $cars = Car::all();
        return view('car_list', compact('cars'));
    }

    /**
     * @throws ValidationException
     */
    protected function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->validate($request, [
            'manufacturer' => 'required|string|min:3',
            'model' => 'required|string',
            'sign' => 'required|string|min:4|max:10',
            'status' => 'boolean'
        ]);

        $car = new Car();

        $car->manufacturer = $request->manufacturer;
        $car->model = $request->model;
        $car->sign = $request->sign;
        $car->status = $request->status;

        $car->save();

        return redirect()->back();
    }

    /**
     * @throws ValidationException
     */
    protected function show_this_car(Request $request)
    {
        $this->validate($request, ['id' => "required"]);
        $id = $request->id;
        $cars = DB::table('cars')->where('id', $id);
        $cars = $cars->get();
        return view('car_list', compact('cars'));
    }

    protected function create_car()
    {
        return view('create_car');
    }

    protected function show_a_car()
    {
        $cars_count = DB::table('cars')->count();
        return view('show_a_car', compact('cars_count'));
    }
}
