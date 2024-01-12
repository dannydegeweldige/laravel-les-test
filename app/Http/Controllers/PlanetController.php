<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();

        return view('planets', ['planets' => $planets]);

    }

    public function show($planet)
    {

    }
}
