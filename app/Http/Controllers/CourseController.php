<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.courses',['courses'=>course::all()]);
    }
    public function addCourse(Request $Request)
    {
        $image = time().'.'.$Request->image->extension();
        $Request->image->move(public_path('../images/'),$image);
        $course = course::create($Request->except('image'));
        $course->update(['image'=>$image]);
        return redirect('admin/courses')->with('message','Course created successfully');
    }
    public function delete(Request $Request)
    {
        $course = course::where('id',$Request->id)->first();
        if ($course->image!=='') {
            if (file_exists('images/'.$course->image)) {

                unlink('images/'.$course->image);
            }
        }
        $course->delete();
        return redirect()->back()->with('message','Course deleted successfully');
    }
}
