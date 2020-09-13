<?php

namespace App\Http\Controllers\Course;

use App\Category;
use App\Course;
use App\Http\Controllers\Controller;
use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{


    public function index()
    {

        $courses = Course::all();
        return view('Course.indexCourse', compact('courses'));

    }


    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $course = new Course();
            $user_id = Auth::user()->id;
            $course->name = $request->input('name');
            $course->title = $request->input('title');
            $course->description = $request->input('description');
            $course->user_id = $user_id;
            $course->category_id = $request->input('categorie');
            $course->year = $request->input('year');

            $image = $request->file('image');
            $new_name = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images/course_images'), $new_name);
//            $path = $image->storeAs('course_images',  $new_name , 'images');
            $course->image = $new_name;
            $course->save();


            return redirect()->back();

        } else {
            $categories = Category::all();

            return view('Course.AddCourse', compact('categories'));
        }

    }



    public function info(Request $request, $id)
    {
        $course = Course::find($id);
        $lectures =Lecture::all()->where('course_id',$id);
        return view('Course.ViewCourseInf', compact('course','lectures'));

    }






    public function edite(Request $request,$id){
            $course = Course::find($request->id);
            if ($request->isMethod('post')){

            $course->name = $request->input('name');
            $course->title = $request->input('title');
            $course->description = $request->input('description');
            $course->year = $request->input('year');
            $course->save();
                return redirect()->back();


            }else{
                $categories = Course::all();


                return view('Course.editeCourse' , compact('course','categories'));
            }

    }



    public function delete(Request $request, $id)
    {

        $course = Course::find($request->id);
        if ($request->isMethod('post')) {
            $course->delete();
            return redirect(route('IndexCourse'));
        } else {
            return view('Course.Deletecourse', compact('course'));

        }

    }


}
