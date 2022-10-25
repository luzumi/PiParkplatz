<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use function React\Promise\all;

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
            'typ' => 'required|string|min:3',
            'kennzeichen' => 'required|string|min:4|max:9',
            'status' => 'boolean'
        ]);

        $car = new Car();

        $car->typ = $request->typ;
        $car->kennzeichen = $request->kennzeichen;
        $car->status = $request->status;

        $car->save();

        return redirect()->back();
    }

    /**
     * @throws ValidationException
     */
    protected function show_this_car(Request $request)
    {
        $this->validate($request, ['id' => "require|number"]);
        $id = $request->id;
        $cars = DB::table('cars')->where('id', $id);

        return view('show_this_car', compact('cars'));
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
