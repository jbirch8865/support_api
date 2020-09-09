<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webhook extends Controller
{
    function handleWebhook()
    {
        return response()->json(["yay" => "webhook handled"], 200);
    }
}
