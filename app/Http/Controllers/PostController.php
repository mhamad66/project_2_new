<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;   
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
    
        return view('pages.posts.index', compact('posts'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.posts.create');
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
        'body'=>'required',
        'image'=>'image',
        ]);
        
        Post::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'image'=>$request->image->store('images', 'public'),
            'user_id'=>Auth::user()->id
            ]);
            
            return redirect()->route('posts.index');
        }
        
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$post = Post::find($id);
        return view('pages.posts.show', compact('post'));
    }


public function edit(){

}

}
