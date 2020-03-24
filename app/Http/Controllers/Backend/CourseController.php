<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function create()
    {
        $courses=Course::all();
        return view('backend.course.create',compact('courses'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
          'course_name'=>'required'
      ]);
      Course::create($request->all());
        toastr()->success('New Subject has been added successfully');
      return redirect()->route('course.create');
    }


    public function edit($id)
    {
        $course=Course::find($id);
        $courses=Course::all();
        return view('backend.course.edit',compact('course','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'course_name'=>'required'
        ]);
        $course=Course::find($id);
        $course->update($request->all());
        toastr()->info('Subject has been updated successfully');
        return redirect()->route('course.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);
        $course->delete();
        toastr()->error('Subject has been deleted successfully');
        return redirect()->back();
    }


}
