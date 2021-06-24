<?php

namespace App\Http\Controllers\API\v1\Auth;

use App\Http\Controllers\ResponseAPI as Controller;
use App\Http\Repository\User\UserRepository;
use Illuminate\Http\Request;
use App\Http\Validations\User\Auth\RegistrationValidator;

class RegisterController extends Controller
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    //
    public function register(Request $request, RegistrationValidator $validator)
    {
        $data = $request->all();
        $validation = $validator->validate($data);
        if ($validation === true) {
            $response = $this->repository->save($data);
            if ($response['success'] === true) {
                return $this->successResponse($message = 'Berhasil melakukan registrasi', $data = [], $code = 201);
            }
            return $this->internalServerErrorResponse($response['message']);
        }
        return $this->errorRequestResponse($validation);
    }
}
