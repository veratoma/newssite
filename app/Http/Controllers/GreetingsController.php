<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    public function index()
    {

        return 'Добро пожаловать на лучший новостной портал в мире!';
    }
}
