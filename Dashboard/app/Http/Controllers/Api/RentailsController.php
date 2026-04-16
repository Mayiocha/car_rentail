<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rentail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RentailsController extends Controller
{
    public function index()
    {
        $rentails = Rentail::with(['user', 'car.brand', 'driver'])->get();

        return response()->json([
            'status' => true,
            'data' => $rentails
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id'      => 'required|exists:users,id',
            'car_id'       => 'required|exists:cars,id',
            'drive_id'     => 'required|exists:drivers,id',
            'pickup_date'  => 'required|date',
            'return_date'  => 'required|date|after:pickup_date',
            'total_amount' => 'required|numeric|min:0',
            'status'       => ['required', Rule::in(['pending', 'confirmed', 'active', 'completed', 'cancelled'])],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $rentail = Rentail::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Renta registrada con éxito',
            'data' => Rentail::with(['user', 'car.brand', 'driver'])->find($rentail->id)
        ], 201);
    }

    public function show(string $id)
    {
        $rentail = Rentail::with(['user', 'car.brand', 'driver'])->find($id);

        if (!$rentail) {
            return response()->json([
                'status' => false,
                'message' => 'Renta no encontrada'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $rentail
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $rentail = Rentail::find($id);

        if (!$rentail) {
            return response()->json([
                'status' => false,
                'message' => 'Renta no encontrada'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'user_id'      => 'sometimes|exists:users,id',
            'car_id'       => 'sometimes|exists:cars,id',
            'drive_id'     => 'sometimes|exists:drivers,id',
            'pickup_date'  => 'sometimes|date',
            'return_date'  => 'sometimes|date|after:pickup_date',
            'total_amount' => 'sometimes|numeric|min:0',
            'status'       => ['sometimes', Rule::in(['pending', 'confirmed', 'active', 'completed', 'cancelled'])],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $rentail->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Renta actualizada',
            'data' => Rentail::with(['user', 'car.brand', 'driver'])->find($rentail->id)
        ], 200);
    }

    public function updateStatus(Request $request, string $id)
    {
        $rentail = Rentail::find($id);

        if (!$rentail) {
            return response()->json([
                'status' => false,
                'message' => 'Renta no encontrada'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'status' => ['required', Rule::in(['pending', 'confirmed', 'active', 'completed', 'cancelled'])],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $rentail->status = $request->status;
        $rentail->save();

        return response()->json([
            'status' => true,
            'message' => 'Estado de la renta actualizado correctamente',
            'data' => $rentail
        ], 200);
    }

    public function destroy(string $id)
    {
        $rentail = Rentail::find($id);

        if (!$rentail) {
            return response()->json([
                'status' => false,
                'message' => 'Renta no encontrada'
            ], 404);
        }

        $rentail->delete();

        return response()->json([
            'status' => true,
            'message' => 'Renta eliminada correctamente'
        ], 200);
    }
}