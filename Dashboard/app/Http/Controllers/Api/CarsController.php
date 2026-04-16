<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::with('brand')->get();

        return response()->json([
            'status' => true,
            'data' => $cars
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_id'      => 'required|exists:brands,id',
            'model'         => 'required|string|max:100',
            'year'          => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'color'         => 'required|string|max:100',
            'license_plate' => 'required|string|max:100|unique:cars,license_plate',
            'mileage'       => 'required|integer|min:0',
            'lat'           => 'required|numeric|between:-90,90',
            'lng'           => 'required|numeric|between:-180,180',
            'is_premiun'    => 'required|boolean',
            'rentail_count' => 'nullable|integer|min:0',
            'daily_rate'    => 'required|numeric|min:0',
            'status' => ['required', Rule::in(['avaible', 'rented', 'maintenance', 'retired'])],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $data = $request->all();
        $data['rentail_count'] = $request->input('rentail_count', 0);

        $car = Car::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Auto registrado exitosamente',
            'data' => Car::with('brand')->find($car->id)
        ], 201);
    }

    public function show(string $id)
    {
        $car = Car::with('brand')->find($id);

        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Auto no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $car
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Auto no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'brand_id'      => 'sometimes|exists:brands,id',
            'model'         => 'sometimes|string|max:100',
            'year'          => 'sometimes|integer|min:1900|max:' . (date('Y') + 1),
            'color'         => 'sometimes|string|max:100',
            'license_plate' => 'sometimes|string|max:100|unique:cars,license_plate,' . $id,
            'mileage'       => 'sometimes|integer|min:0',
            'lat'           => 'sometimes|numeric|between:-90,90',
            'lng'           => 'sometimes|numeric|between:-180,180',
            'is_premiun'    => 'sometimes|boolean',
            'rentail_count' => 'sometimes|integer|min:0',
            'daily_rate'    => 'sometimes|numeric|min:0',
            'status'        => ['sometimes', Rule::in(['available', 'rented', 'maintenance', 'retired'])],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $car->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Auto actualizado',
            'data' => Car::with('brand')->find($car->id)
        ], 200);
    }

    public function updateStatus(Request $request, string $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Auto no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => ['required', Rule::in(['available', 'rented', 'maintenance', 'retired'])],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $car->status = $request->status;
        $car->save();

        return response()->json([
            'status' => true,
            'message' => 'Estado del auto actualizado correctamente',
            'data' => $car
        ], 200);
    }

    public function destroy(string $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Auto no encontrado'
            ], 404);
        }

        $car->delete();

        return response()->json([
            'status' => true,
            'message' => 'Auto eliminado correctamente'
        ], 200);
    }
}