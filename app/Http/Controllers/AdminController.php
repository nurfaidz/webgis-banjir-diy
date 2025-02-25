<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $items = User::all();

        return view('pages.dashboards.admins.index', compact('items'));
    }

    public function getDatatable()
    {
        $items = User::all();

        return response()->json($items);
    }
}
