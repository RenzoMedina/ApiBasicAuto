<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $car = Car::when(request()->filled('modelo'), function($query){
            $query->where('modelo', request('modelo'));
        })
        ->paginate(10);
        return CarResource::collection($car);
    }



    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
        return new CarResource($car);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
        $car->update($request->all());
        return new CarResource($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();
        return new CarResource($car);
    }
}
