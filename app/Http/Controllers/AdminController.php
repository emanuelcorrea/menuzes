<?php

namespace App\Http\Controllers;

use App\Models\Section;
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
        $sections = Section::all();

        return view('admin.index')->with('sections', $sections);
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
