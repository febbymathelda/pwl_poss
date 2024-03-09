<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
        $user = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]);

            $user->username = 'manager12';

            //$user->isDirty(); //true
            //$user->isDirty('username'); //true
            //$user->isDirty('nama'); //false
            //$user->isDirty(['nama', 'username']); //true

            //$user->isClean();
            //$user->isClean('username');
            //$user->isClean('nama');
            //$user->isClean(['nama', 'username']);

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged('username', 'level_id');
        $user->wasChanged('nama');
        dd($user->wasChanged(['nama', 'username',])); //true

    }
}