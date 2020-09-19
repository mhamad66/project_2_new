<?php

namespace App\Http\Controllers\Mark;

use App\Category;
use App\Course;
use App\Http\Controllers\Controller;
use App\Lecture;
use App\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
        $marks= Mark::all();
        return view('Mark.IndexMark',compact('marks'));

    }

    public function add(Request $request)
    {
//        dd($request->input('semester'));
        if ($request->isMethod('post')) {
            $mark = new Mark();
            $mark->title = $request->input('title');
            $file = $request->file('link');
            $new_name = time() . '.' . $file->getClientOriginalExtension();
            $des = public_path('/Mark/MarkCourse');
            $request->link->move($des, $new_name);
            $mark->link = $new_name;

            $mark->course_id = $request->input('courseId');
            $mark->semester = $request->input('semester');
            $mark->save();

            return redirect()->back();


        } else {
            $courses = Course::all();
            return view('Mark.AddMark', compact('courses'));
        }

    }


    public function delete(Request $request, $id)
    {
        $mark = Mark::find($id);
        $mark->delete();
return redirect(route('IndexMark'));
    }


}
