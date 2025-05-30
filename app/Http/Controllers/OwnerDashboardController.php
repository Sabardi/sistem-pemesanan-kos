<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class OwnerDashboardController extends Controller
{
    /**
     * Display the owner's dashboard.
     */
    public function index(): View
    {
        // Later, you can pass data specific to the owner here
        return view('owner.dashboard');
    }
}
