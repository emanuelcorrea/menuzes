<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.index');
    }

    /**
     * Handle the incoming request.
     *
     * @return View
     */
    public function login(): View
    {
        return view('admin.login');
    }
}
