<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::with('cars')->get();

        return response()->json([
            'status' => true,
            'data'   => $brands
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100|unique:brands,name',
            'img'  => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $brand = Brand::create($request->all());

        return response()->json([
            'status'  => true,
            'message' => 'Marca creada exitosamente',
            'data'    => $brand
        ], 201);
    }

    public function show(string $id)
    {
        $brand = Brand::with('cars')->find($id);

        if (!$brand) {
            return response()->json([
                'status'  => false,
                'message' => 'Marca no encontrada'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data'   => $brand
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json([
                'status'  => false,
                'message' => 'Marca no encontrada'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:100|unique:brands,name,' . $id,
            'img'  => 'sometimes|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $brand->update($request->all());

        return response()->json([
            'status'  => true,
            'message' => 'Marca actualizada con éxito',
            'data'    => $brand
        ], 200);
    }

    public function destroy(string $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json([
                'status'  => false,
                'message' => 'Marca no encontrada'
            ], 404);
        }

        $brand->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Marca eliminada correctamente'
        ], 200);
    }
}