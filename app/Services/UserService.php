<?php
namespace App\Services;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService {

    public function createAccount($data) {
        $password = "";
        if($data["password"]) {
           $password = Hash::make($data['password']);
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $password,
        ]);
    }

}
