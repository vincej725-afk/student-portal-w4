<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page with department and curriculum information.
     */
    public function index()
    {
        $departmentInfo = [
            'name' => 'College of Computer Studies',
            'program' => 'Bachelor of Science in Information Technology',
            'course' => 'WEBDEV3 — Web Framework Laravel Development',
            'term' => '1st Trimester AY 2026-2027',
            'instructor' => 'Web Development Department',
        ];

        $competencies = [
            'Connect routes to controllers within the MVC architectural pattern',
            'Create resource controllers following RESTful conventions',
            'Build modern Blade layouts, components, and views receiving controller data',
            'Apply middleware pipeline protection to routes and route groups',
        ];

        return view('about', compact('departmentInfo', 'competencies'));
    }
}
