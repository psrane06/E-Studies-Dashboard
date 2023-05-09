<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    public function create()
    {
        return view("courses.create", ['title' => 'Create Course']);
    }
    //store course
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'course_name' => 'required',
            "start_date" => "after:today",
            "end_date" => "after:today|after:start_date",
            // "logo" => null
            "description" => "required",
        ]);

        $formFields['user_id'] = auth()->id();
        Course::create($formFields);
        Session::flash('flash_message', 'A new course has been created!');
        return redirect()->back()->with(['message', 'An error occurred. Please try again.']);

    }
}
