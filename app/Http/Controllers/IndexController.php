<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $packets = Packet::all();
        return view('dashboard.index', compact('packets'));
    }
}
