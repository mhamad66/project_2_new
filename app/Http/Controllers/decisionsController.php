<?php

namespace App\Http\Controllers;
use App\Decision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class decisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decisions = Decision::all();

        return view('decisions.index', compact('decisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('decisions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);
          $decision = new Decision;
        $decision->title = $request->title;
        $decision->description = $request->description;
        if(!is_null($request->image)){
           $decision->image = $request->image->store('decision', 'public');
        }
        $decision->save();
        return redirect(route('decisions.index'));

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Decision $decision)
    {
        return view('decisions.show')->with('decision',$decision);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Decision $decision)
    {
        return view('decisions.edit')->with('decision', $decision);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Decision $decision)
    {
        $data = $request->only(['title', 'description']);
        if ($request->hasFile('image')) {
            $image = $request->image->store('decision', 'public');
            storage::disk('public')->delete($decision->image);
            $data['image'] = $image;
        }
        $decision->update($data);
        return redirect(route('decisions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Decision = Decision::findOrFail($id);
        $Decision->delete();
        return redirect()->route('decisions.index');
    }
}
