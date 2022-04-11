<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\UserRepository;

class UserController extends Controller
{

    public function getAuthPage(UserRepository $child){
        return $child->getAuthPage();
    }

    public function loginUser(UserRepository $child){
         return $child->authenticateUser(request()->email, request()->password);
    }

    public function getDashboard(UserRepository $child){
        
        return $child->getDashboard();
    }
}
