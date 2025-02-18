<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloodAreaController extends Controller
{
    public function index()
    {
        return view('pages.dashboards.flood-areas.index');
    }
}
