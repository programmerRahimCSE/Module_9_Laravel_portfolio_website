<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YourControllerName extends Controller
{
    function YourAction (Request $request):array{
       
        return $request->input();
    }
}
