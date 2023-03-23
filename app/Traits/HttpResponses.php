<?php

namespace App\Traits;

trait HttpResponses
{
    protected function success($data, $message, $code = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => 'Request was successful.',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function error($data, $message, $code): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'status' => 'Error has occured.',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
