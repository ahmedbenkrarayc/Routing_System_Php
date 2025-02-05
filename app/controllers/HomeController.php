<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;

class HomeController{
    public function index(){
        return View::make('home/index', ['name' => 'Ahmed']);
    }

    public function getAllUsers(){
        $user = new User();
        $allUsers = $user->getAll();
        return View::make('home/users', ['users' => $allUsers]);
    }

    public function getUser($id){
        $user = new User();
        $user = $user->getOne($id);
        return View::make('home/user', ['user' => $user]);
    }
}