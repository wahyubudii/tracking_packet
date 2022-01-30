<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use App\Models\Ekspedisi;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $packets = Packet::all();
        $ekspedisis = Ekspedisi::all();
        $testimonials = Testimonial::all();
        return view('dashboard.index', compact('packets', 'ekspedisis', 'testimonials'));
    }
}
