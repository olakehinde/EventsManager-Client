<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UsersController extends Controller
{
    public function getLogin() {
    	return view('users.login');
    }

    public function postLogin() {

    }

    public function getRegister() {
    	return view('users.register');
    }

    public function postRegister() {
    	
    }

    public function getEdit() {
    	return view('users.edit');
    }

    public function postEdit() {
    	
    }

    public function getForgotPassword() {
    	return view('users.forgotpassword');
    }

    public function postForgotPassword() {
    	
    }

     public function getChangePassword() {
    	return view('users.change_password');
    }

    public function postChangePassword() {
    	
    }
}
