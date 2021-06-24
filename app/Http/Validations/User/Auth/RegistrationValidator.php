<?php

namespace App\Http\Validations\User\Auth;

use App\Infrastructure\BaseValidator;

class RegistrationValidator extends BaseValidator
{
    public function __construct()
    {
        $this->rules = [
            'fullname'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users|max:255',
            'username'  => 'required|string|unique:users|max:255',
            'password'  => 'required|min:8|max:255',
            'confirm_password' => 'same:password'
        ];
        $this->messages = [
            'fullname.required' => 'Mohon masukan nama lengkap dengan benar',
            'fullname.max'      => 'Jumlah maksimal karakter adalah 255 karakter',
            'email.required'    => 'Mohon masukan email dengan benar',
            'email.email'       => 'Format email anda bermasalah',
            'email.unique'      => 'Email anda sudah terdaftar',
            'email.max'         => 'Jumlah maksimal karakter adalah 255 karakter',
            'username.required' => 'Mohon masukan dengan benar',
            'username.unique'   => 'Username anda sudah terdaftar',
            'username.max'      => 'Jumlah maksimal karakter adalah 255 karakter',
            'password.required' => 'Mohon masukan dengan benar',
            'password.min'      => 'Password minimum berjumlah 8 karakter',
            'password.max'      => 'Jumlah maksimal karakter adalah 255 karakter',
            'confirm_password.same'      => 'Password tidak sama',
        ];
    }
}
