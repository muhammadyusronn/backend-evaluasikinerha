<?php

namespace App\Http\Validations\User\Auth;

use App\Infrastructure\BaseValidator;

class LoginValidator extends BaseValidator
{
    public function __construct()
    {
        $this->rules = [
            'email'     => 'required|email|max:255',
            'password'  => 'required|min:8|max:255',
        ];
        $this->messages = [
            'email.required'    => 'Mohon masukan email dengan benar',
            'email.email'       => 'Format email anda bermasalah',
            'email.max'         => 'Jumlah maksimal karakter adalah 255 karakter',
            'password.required' => 'Mohon masukan dengan benar',
            'password.min'      => 'Password minimum berjumlah 8 karakter',
            'password.max'      => 'Jumlah maksimal karakter adalah 255 karakter',
        ];
    }
}
