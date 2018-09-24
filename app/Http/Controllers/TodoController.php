<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function __invoke() // invoke if controller only has one method
    {
        return Todo::all();
    }
}
