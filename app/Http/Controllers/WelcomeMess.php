<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeMess extends Controller
{
    public function showMess()
    {
        return 'Hello world! Im your first APP!';
    }
}
