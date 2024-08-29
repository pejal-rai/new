<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ok($data)
    {
        return "This is " . $data . " page";
    }
}
