<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    /**
     * Display the admin's dashboard.
     */
    public function index(): View
    {
        // Later, you can pass data specific to the admin here
        return view('admin.dashboard');
    }
}
