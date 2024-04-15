<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return $user;
    }

}
