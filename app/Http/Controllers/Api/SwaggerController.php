<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class SwaggerController  extends Controller
{
    public function swagger()
    {
        return view('vendor.latrell.swagger.index');
    }
}