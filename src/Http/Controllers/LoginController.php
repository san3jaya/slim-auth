<?php
/**
 * Created by PhpStorm.
 * User: sanjayam
 * Date: 07/Dec/2016
 * Time: 11:06 AM
 */

namespace SlimAuth\Http\Controllers;


use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('slimAuth::login');
    }
}