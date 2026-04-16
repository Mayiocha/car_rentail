<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DrivesController extends Controller
{
    public function index()
    {
        $drivers = Drive::with(['user', 'rentails'])->get();

        return response()->json([
            'status' => true,
            'data' => $drivers
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'license_number' => 'required|string|max:100|unique:drivers,license_number',
            'license_img'    => 'required|string|max:255',
            'user_id'        => 'required|exists:users,id|unique:drivers,user_id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $driver = Drive::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Conductor registrado con éxito',
            'data' => Drive::with(['user', 'rentails'])->find($driver->id)
        ], 201);
    }

    public function show(string $id)
    {
        $driver = Drive::with(['user', 'rentails'])->find($id);

        if (!$driver) {
            return response()->json([
                'status' => false,
                'message' => 'Conductor no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $driver
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $driver = Drive::find($id);

        if (!$driver) {
            return response()->json([
                'status' => false,
                'message' => 'Conductor no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'license_number' => 'sometimes|string|max:100|unique:drivers,license_number,' . $id,
            'license_img'    => 'sometimes|string|max:255',
            'user_id'        => 'sometimes|exists:users,id|unique:drivers,user_id,' . $id,
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $driver->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Datos del conductor actualizados',
            'data' => Drive::with(['user', 'rentails'])->find($driver->id)
        ], 200);
    }

    public function destroy(string $id)
    {
        $driver = Drive::find($id);

        if (!$driver) {
            return response()->json([
                'status' => false,
                'message' => 'Conductor no encontrado'
            ], 404);
        }

        $driver->delete();

        return response()->json([
            'status' => true,
            'message' => 'Registro de conductor eliminado'
        ], 200);
    }
}