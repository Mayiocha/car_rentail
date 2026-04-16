<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('loyalty')->get();

        return response()->json([
            'status' => true,
            'data' => $users
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'             => 'required|string|max:100',
            'email'            => 'required|string|email|max:255|unique:users,email',
            'password'         => 'required|string|min:6',
            'img'              => 'nullable|string|max:255',
            'loyalty_points'   => 'required|integer',
            'loyalty_level_id' => 'required|exists:loyaltys,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $user = User::create([
            'name'             => $request->name,
            'email'            => $request->email,
            'password'         => Hash::make($request->password),
            'img'              => $request->img,
            'loyalty_points'   => $request->loyalty_points,
            'loyalty_level_id' => $request->loyalty_level_id,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Usuario creado con éxito',
            'data' => User::with('loyalty')->find($user->id)
        ], 201);
    }

    public function show(string $id)
    {
        $user = User::with('loyalty')->find($id);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Usuario no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $user
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Usuario no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name'             => 'sometimes|string|max:100',
            'email'            => 'sometimes|string|email|max:255|unique:users,email,' . $id,
            'password'         => 'sometimes|string|min:6',
            'img'              => 'sometimes|nullable|string|max:255',
            'loyalty_points'   => 'sometimes|integer',
            'loyalty_level_id' => 'sometimes|exists:loyaltys,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $data = $request->all();

        if ($request->has('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return response()->json([
            'status' => true,
            'message' => 'Usuario actualizado',
            'data' => User::with('loyalty')->find($user->id)
        ], 200);
    }

    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Usuario no encontrado'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'status' => true,
            'message' => 'Usuario eliminado correctamente'
        ], 200);
    }
}