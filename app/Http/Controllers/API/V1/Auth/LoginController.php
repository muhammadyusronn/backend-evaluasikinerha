<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Http\Controllers\ResponseAPI;
use App\Http\Validations\User\Auth\LoginValidator;
use Exception;
use Illuminate\Http\Request;

class LoginController extends ResponseAPI
{
    //
    public function login(Request $request, LoginValidator $validator)
    {
        $data = $request->all();
        $validation = $validator->validate($data);
        if ($validation === true) {
            try {
                $credentials = request(['email', 'password']);
                if ($token = auth()->attempt($credentials)) {
                    return $this->successResponse(
                        $message = 'Login berhasil',
                        $data = $this->tokenResponse($token)
                    );
                }
            } catch (Exception $e) {
                return $this->internalServerErrorResponse($e->getMessage());
            };
            return $this->errorRequestResponse($error = 'These credentials do not match our records.');
        }
    }
}
