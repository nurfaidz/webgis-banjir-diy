<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloodZoneController extends Controller
{
    public function index()
    {
        $items = \App\Models\FloodZone::all();
        return view('pages.dashboards.flood-zones.index', compact('items'));
    }
}
