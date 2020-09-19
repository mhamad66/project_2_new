<?php

namespace App\Http\Controllers;
use App\Homework;
use App\Http\Requests\homeworkRequest;
use Illuminate\Http\Request;

class homeworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $homeworks   = Homework::all();
    return view('homeworks.index')->with('homeworks',$homeworks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homeworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(homeworkRequest $request)
    {
        $homework = new Homework;
        $homework->title = $request->title;
        $homework->description = $request->description;
        $homework->email = $request->email;
        $homework->deadline = $request->deadline;
        if(!is_null($request->file)){
            $file = $request->file('file');
            $new_name = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move(public_path('homeworkFile'), $new_name);
            $homework->file = $new_name;
        }    
        $homework->save();
        return redirect(route('homeworks.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        return view('homeworks.show')->with('homework',$homework);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
public function dawnload($file)
{
return response()->download('homeworkFile/'.$file);
}


}
