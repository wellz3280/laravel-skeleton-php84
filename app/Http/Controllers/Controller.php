<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class Controller
{
    abstract public function handler(Request $request): Response;
}
