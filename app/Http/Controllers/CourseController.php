<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CourseController extends Controller
{
    public function create()
    {
        return view("courses.create");
    }
    //store course
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'course_name' => 'required',
            'user_id' => 'required',
            "start_date" => "required",
            "end_date" => "required",
            // "logo" => null
            "description" => "required",
        ]);

        Course::create($formFields);
        Session::flash('flash_message', 'A new course has been created!');
        return redirect()->back()->with(['message','An error occurred. Please try again.']);

    }
}
