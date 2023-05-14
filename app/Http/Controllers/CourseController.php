<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\UserCourse;
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

        $course = Course::create($formFields);
        UserCourse::create([
            'user_id' => auth()->id(),
            'course_id' => $course->id,
        ]);
        Session::flash('flash_message', 'A new course has been created!');
        return redirect()->back()->with(['message', 'An error occurred. Please try again.']);
    }

    public function index()
    {
        $courses = Course::with('users')->where('user_id', auth()->id())->get();

        $courses->each(function ($course) {
            $user_name = $course->users->pluck('name')->implode(', ');
            $course->user_id = $user_name;
            $course->users->each(function ($user) use ($course) {
                $course->progress = $user->pivot->course_completed;
            });
        });
        return view('courses.list')->with('courses', $courses);
    }

    public function show(Course $course)
    {
        return view('courses.show', ['course' => $course]);
    }
}
