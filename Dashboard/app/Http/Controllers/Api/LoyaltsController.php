<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loyalt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoyaltsController extends Controller
{
    public function index()
    {
        $levels = Loyalt::with('users')->get();

        return response()->json([
            'status' => true,
            'data' => $levels
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                => 'required|string|unique:loyaltys,name',
            'main_points'         => 'required|integer|min:0',
            'discount_percentage' => 'required|integer|min:0|max:100',
            'free_extra_hours'    => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $level = Loyalt::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Nivel de lealtad creado con éxito',
            'data' => $level
        ], 201);
    }

    public function show(string $id)
    {
        $level = Loyalt::with('users')->find($id);

        if (!$level) {
            return response()->json([
                'status' => false,
                'message' => 'Nivel no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $level
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $level = Loyalt::find($id);

        if (!$level) {
            return response()->json([
                'status' => false,
                'message' => 'Nivel no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name'                => 'sometimes|string|unique:loyaltys,name,' . $id,
            'main_points'         => 'sometimes|integer|min:0',
            'discount_percentage' => 'sometimes|integer|min:0|max:100',
            'free_extra_hours'    => 'sometimes|integer|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $level->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Nivel actualizado correctamente',
            'data' => $level
        ], 200);
    }

    public function destroy(string $id)
    {
        $level = Loyalt::find($id);

        if (!$level) {
            return response()->json([
                'status' => false,
                'message' => 'Nivel no encontrado'
            ], 404);
        }

        $level->delete();

        return response()->json([
            'status' => true,
            'message' => 'Nivel eliminado con éxito'
        ], 200);
    }
}