<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = "75";

        // Store the $id, $name, and $age in the $data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Create a cookie
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Set the cookie and return the response
        return response()->json($data, 200)
            ->cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
