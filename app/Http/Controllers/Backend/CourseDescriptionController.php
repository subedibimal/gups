<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use App\Models\CourseDescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = CourseDescription::all();
        return view('backend.coursedescription.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('backend.coursedescription.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'description' => 'required'
        ]);
        CourseDescription::updateOrCreate(
            ['course_id' => $request->course_id],
            ['description' => $request->description]
        );
        toastr()->success('Subject description has been added successfully');
        return redirect()->route('course_description.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $course_desc = CourseDescription::find($id);
        $courses = Course::all();
        return view('backend.coursedescription.edit', compact('course_desc', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'description' => 'required'
        ]);
        $coursedesc = CourseDescription::find($id);
        $coursedesc->fill($request->all())->save();
        toastr()->info('Subject description has been updated successfully');
        return redirect()->route('course_description.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = CourseDescription::find($id);
        $course->delete();
        toastr()->error('Subject description has been removed successfully');
        return redirect()->back();
    }
}
