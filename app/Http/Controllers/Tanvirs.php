<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanvir;
class Tanvirs extends Controller
{
    function list()
    {
        return Tanvir::all();
    }
}
