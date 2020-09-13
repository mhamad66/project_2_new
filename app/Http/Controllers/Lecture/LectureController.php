<?php

namespace App\Http\Controllers\Lecture;

use App\Course;
use App\Http\Controllers\Controller;
use App\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(){
        $lectures =Lecture::all();
        return view('Lecture.indexLecture',compact('lectures'));

    }


    public function add(Request $request){

        if ($request->isMethod('post')){
            $lecture = new Lecture();
            $lecture->title =$request->input('title');
            $lecture->link =$request->input('link');
            if (!is_null($request->file('file'))) {
                $file = $request->file('file');
                $new_name = time() . '.' . $file->getClientOriginalExtension();
                $request->file->move(public_path('Lectures/Lecture_Course'), $new_name);
                $lecture->file = $new_name;
            }

            $lecture->course_id = $request->input('courseId');
            $lecture->save();




            return redirect()->back();



        }else{
            $courses = Course::all();
            return view('Lecture.addLecture',compact('courses'));
        }


    }


    public function AddId(Request $request,$id){
        $courseid = Course::find($id);
        $courses =Course::all();
        return view('Lecture.addLectureId',compact('courses','courseid'));

    }

public  function  delete(Request $request , $id){
        $lecture = Lecture::find($id);
        $lecture->delete();
    return redirect(route('IndexLecure'));

}

public function  edite(Request $request ,$id){
        $lecture = Lecture::find($id);
        if ($request->isMethod('post')){
            $lecture->title =$request->input('title');
            $lecture->save();
            return redirect()->back();

        }else{

            return view('Lecture.editeLecture',compact('lecture'));

        }


}




}
