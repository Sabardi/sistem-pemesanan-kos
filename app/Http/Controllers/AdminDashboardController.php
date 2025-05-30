<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// use Laravolt\Indonesia\Facade as Indonesia; // To be removed

class AdminDashboardController extends Controller
{
    /**
     * Display the admin's dashboard.
     */
    public function index(): View
    {
        // $provinces = Indonesia::allProvinces(); // To be removed
        // return view('admin.dashboard', ['provinces' => $provinces]); // To be removed
        return view('admin.dashboard'); // Reverted to original
    }
}
