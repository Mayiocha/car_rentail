<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['rentail.user', 'rentail.car'])->get();

        return response()->json([
            'status' => true,
            'data' => $payments
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rentail_id'     => 'required|exists:rentails,id',
            'amount'         => 'required|numeric|min:1',
            'payment_method' => 'required|string|max:100',
            'transition_id'  => 'required|string|max:255|unique:payments,transition_id',
            'status'         => ['required', Rule::in(['pending', 'completed', 'failed', 'refunded'])],
            'payment_date'   => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $payment = Payment::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Pago registrado correctamente',
            'data' => Payment::with(['rentail.user', 'rentail.car'])->find($payment->id)
        ], 201);
    }

    public function show(string $id)
    {
        $payment = Payment::with(['rentail.user', 'rentail.car'])->find($id);

        if (!$payment) {
            return response()->json([
                'status' => false,
                'message' => 'Pago no encontrado'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $payment
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return response()->json([
                'status' => false,
                'message' => 'Pago no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'rentail_id'     => 'sometimes|exists:rentails,id',
            'amount'         => 'sometimes|numeric|min:1',
            'payment_method' => 'sometimes|string|max:100',
            'transition_id'  => 'sometimes|string|max:255|unique:payments,transition_id,' . $id,
            'status'         => ['sometimes', Rule::in(['pending', 'completed', 'failed', 'refunded'])],
            'payment_date'   => 'sometimes|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        $payment->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Información de pago actualizada',
            'data' => Payment::with(['rentail.user', 'rentail.car'])->find($payment->id)
        ], 200);
    }

    public function destroy(string $id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return response()->json([
                'status' => false,
                'message' => 'Pago no encontrado'
            ], 404);
        }

        $payment->delete();

        return response()->json([
            'status' => true,
            'message' => 'Registro de pago eliminado'
        ], 200);
    }
}