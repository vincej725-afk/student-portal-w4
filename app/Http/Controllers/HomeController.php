<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home dashboard page.
     */
    public function index()
    {
        $stats = [
            'enrolled_students' => 1240,
            'active_courses' => 38,
            'current_semester' => '1st Trimester AY 2026-2027',
        ];

        $announcement = [
            'title' => 'Prelim Examination Schedule & Requirements Posted',
            'date' => 'September 2026',
            'message' => 'Please review your course modules and ensure all laboratory exercises for Weeks 1 to 4 are submitted before the examination week.',
        ];

        return view('home', compact('stats', 'announcement'));
    }
}
