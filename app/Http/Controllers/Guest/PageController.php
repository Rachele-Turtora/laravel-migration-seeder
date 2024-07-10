<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $data = [
            'trains' => Train::whereDate('departure_time', '>=', $today)->orderBy('departure_time')->get()
        ];

        return view('welcome', $data);
    }
}
