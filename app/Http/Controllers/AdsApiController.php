<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsApiController extends Controller
{
    public function index()
    {
        $adsSettings = \App\Models\AdsSetting::first();
        return response()->json($adsSettings);
    }
}
