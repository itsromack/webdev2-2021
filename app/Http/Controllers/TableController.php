<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class TableController extends Controller
{
    public function index(Request $request)
    {
        $announcements = Announcement::all();
        return view('table', compact('announcements'));
    }
}