<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        return view('courses.index', [
            'courses' => Course::all(),
        ]);
    }

    public function show(Course $course): View
    {
        return view('courses.show', ['course' => $course]);
    }
}
