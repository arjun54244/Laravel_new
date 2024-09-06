<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function index (){
    //     return view('welcome');
    // }
    // function user($user_id,$User_name){
    //     return $user_id . $User_name;
    // }

    // public function index( $name){
    //     return "thsi is invoked" - $name;
    // }
    public function create(){
        return "This is create";
    }
    // public function login(){
    //     return view('auth.login', [
    //         'name' => 'James',
    //         'last' => 'doi',
    //     ]);
    // }
    public function login(){
        return view('auth.login');
    }
    public function greeting(){
        return view('auth.login');
    }
    
}
