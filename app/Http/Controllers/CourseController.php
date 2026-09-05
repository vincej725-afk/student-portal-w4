<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Master courses collection stored as an array (Week 4 standard before Eloquent in Week 6).
     */
    protected array $courses = [
        [
            'code' => 'WEBDEV3',
            'title' => 'Web Framework Laravel Development',
            'units' => 5,
            'category' => 'Major',
            'instructor' => 'Prof. Vince Earl Bayo-Ayo',
            'schedule' => 'Mon / Wed 10:00 AM - 12:30 PM',
            'prerequisite' => 'WEBDEV2 (Server-Side Scripting)',
            'description' => 'Comprehensive immersion into modern web development with the Laravel framework. Topics include MVC architectural flow, RESTful resource controllers, Blade templating, component architecture, middleware security, and database ORM.',
        ],
        [
            'code' => 'DBMS2',
            'title' => 'Advanced Database Systems',
            'units' => 3,
            'category' => 'Major',
            'instructor' => 'Engr. J. Santos',
            'schedule' => 'Tue / Thu 1:00 PM - 2:30 PM',
            'prerequisite' => 'DBMS1 (Database Fundamentals)',
            'description' => 'In-depth coverage of relational database engineering, advanced SQL queries, schema normalization, transaction concurrency, query indexing, and stored procedures.',
        ],
        [
            'code' => 'SE1',
            'title' => 'Software Engineering 1',
            'units' => 3,
            'category' => 'Core',
            'instructor' => 'Dr. M. Reyes',
            'schedule' => 'Mon / Wed 3:00 PM - 4:30 PM',
            'prerequisite' => 'PROG2 (Object-Oriented Programming)',
            'description' => 'Systematic approach to software development lifecycle (SDLC), agile scrum workflows, requirement specifications, UML design, and team-based development practices.',
        ],
        [
            'code' => 'NET1',
            'title' => 'Computer Networks & Security',
            'units' => 3,
            'category' => 'Core',
            'instructor' => 'Engr. R. Cruz',
            'schedule' => 'Friday 8:00 AM - 11:00 AM',
            'prerequisite' => 'IT101 (Introduction to Computing)',
            'description' => 'Architectural study of OSI & TCP/IP models, IP addressing, subnetting, switching, routing, firewalls, and basic cryptographic defensive principles.',
        ],
        [
            'code' => 'MOBDEV1',
            'title' => 'Mobile Application Development',
            'units' => 3,
            'category' => 'Elective',
            'instructor' => 'Prof. K. Bautista',
            'schedule' => 'Saturday 9:00 AM - 12:00 PM',
            'prerequisite' => 'WEBDEV2 (Server-Side Scripting)',
            'description' => 'Engineering user-centric mobile applications, modern reactive UI paradigms, client-side state handling, and integration with backend REST APIs.',
        ],
        [
            'code' => 'CAP1',
            'title' => 'Capstone Project & Research 1',
            'units' => 3,
            'category' => 'Major',
            'instructor' => 'Research Advisory Panel',
            'schedule' => 'Thursday 3:00 PM - 6:00 PM',
            'prerequisite' => 'SE1 (Software Engineering 1)',
            'description' => 'Preliminary project ideation, problem identification, literature review, project feasibility study, and initial prototype architectural defense.',
        ],
    ];

    /**
     * Display a listing of the resource.
     * Supports query-string search filter (?q=...) and category filter (?category=...).
     */
    public function index(Request $request)
    {
        $courses = $this->courses;
        $search = $request->query('q', '');
        $selectedCategory = $request->query('category', '');

        if (!empty($search)) {
            $courses = array_filter($courses, function ($course) use ($search) {
                return stripos($course['code'], $search) !== false
                    || stripos($course['title'], $search) !== false
                    || stripos($course['description'], $search) !== false;
            });
        }

        if (!empty($selectedCategory)) {
            $courses = array_filter($courses, function ($course) use ($selectedCategory) {
                return strcasecmp($course['category'], $selectedCategory) === 0;
            });
        }

        return view('courses.index', compact('courses', 'search', 'selectedCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store() — coming in Week 8 (Forms & Validation)';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $course)
    {
        $foundCourse = null;
        foreach ($this->courses as $item) {
            if (strcasecmp($item['code'], $course) === 0) {
                $foundCourse = $item;
                break;
            }
        }

        abort_unless($foundCourse !== null, 404, "Course [{$course}] not found in curriculum.");

        return view('courses.show', ['course' => $foundCourse]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $course)
    {
        return "edit() for course [{$course}] — coming in Week 8 (Forms & Validation)";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $course)
    {
        return "update() for course [{$course}] — coming in Week 8 (Forms & Validation)";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $course)
    {
        return "destroy() for course [{$course}] — coming in Week 8 (Forms & Validation)";
    }
}
