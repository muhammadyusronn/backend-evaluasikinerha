<?php

namespace App\Http\Repository\User;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function save(array $data)
    {
        try {
            $model = new User();
            $model->fullname     = $data['fullname'];
            $model->email        = $data['email'];
            $model->username     = $data['username'];
            $model->password     = Hash::make($data['password']);
            $model->save();
            return ['success' => true, 'data' => $model, 'message' => 'Created successfully'];
        } catch (Exception $e) {
            return ['success' => 'false', 'message' => $e->getMessage()];
        }
    }
}
