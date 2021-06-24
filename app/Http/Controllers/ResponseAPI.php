<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ResponseAPI extends BaseController
{
    //
    public function successResponse($messages = 'OK', $data = [], $code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $messages,
            'data'     => $data,
        ], $code);
    }

    public function errorRequestResponse($errors = [], $code = 422)
    {
        return response()->json([
            'success' => false,
            'messafe' => 'Unprocessable Entity',
            'errors'  => $errors
        ], $code);
    }

    public function unauthorizedResponse($errors = [], $message = 'Unauthorized', $code = 401)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors'  => $errors
        ], $code);
    }

    public function internalServerErrorResponse($errors = [])
    {
        return response()->json([
            'success' => false,
            'message' => 'Internal Server Error',
            'errors'  => $errors
        ], 500);
    }

    public function tokenResponse($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
