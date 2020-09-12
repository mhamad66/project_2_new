<?php

namespace App\Http\Controllers\Categorie;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieControler extends Controller
{
    public function  index(){
        $categories =Category::all();
        return view('Categorie.IndexCategorie',compact('categories'));
    }



    public function add(Request $request)
    {
        if ($request->isMethod('post')){
            $categorie = new Category();
            $categorie->name = $request->input('name');
            $categorie->description= $request->input('description');
            $categorie->save();
            return  redirect()->back();
        }else{
            return view('Categorie.AddCategorie');
        }

    }


    public function edite(Request $request , $id){
        $categorie = Category::find($request->id);
        if ($request->isMethod('post')){
            $categorie->name = $request->input('name');
            $categorie->description= $request->input('description');
            $categorie->save();
            $categories = Category::all();
            return view('Categorie.IndexCategorie',compact('categories'));


        }else{


            return view('Categorie.EditeCategorie' , compact('categorie'));
        }


    }

    public function delete(Request $request,$id){

        $categorie = Category::find($request->id);
        if ($request->isMethod('post')){
            $categorie->delete();
            return redirect(route('IndexCategorie'));



        }else{

            return view('Categorie.DeleteCategorie',compact('categorie'));

        }



    }





}
