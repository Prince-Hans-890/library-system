<?php
namespace Controllers;

use Core\Http\Request;
use Core\Http\Response;

class HomeController
{
    public function index(Request $request)
    {
        return new Response(view('landing/index', [
            'title' => 'College Library System',
        ]));
    }

    public function login(Request $request)
    {
        return new Response(view('auth/login', [
            'title' => 'Login',
        ]));
    }

    public function register(Request $request)
    {
        return new Response(view('auth/register', [
            'title' => 'Register',
        ]));
    }
}
