<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index(){
        //$posts = DB::table('posts')->orderBy('id','desc')->paginate(3);

        $posts = Post::orderBy('id','desc')->paginate(3);
     
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
         $request->validate([
            'title'=>'required|max:100|min:4',
            'description'=>'nullable|max:1600|min:10',
            'image'=>'nullable|image|mimes:png,jpeg,jpg',
         ]);

        /*  Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
            
         ]); */

         $data = new Post();

         $data->title    = $request->title;
         $data->title    = $request->description;

         $data->save();

         return redirect()->route('posts.index')->with('success', 'Successfully Post Created ');
    }

    public function show($id){
        $posts = Post::find($id);
        return view('posts.show', compact('posts'));
        return $posts;
    }

    public function edit($id){
        $posts = Post::find($id);
        return view('posts.edit', compact('posts'));
        return $posts;

    }

    public function update(Request $request, $id){
    
        $posts = Post::find($id);
        
            $request->validate([
               'title'=>'required|max:100|min:4',
               'description'=>'nullable|max:1600|min:10',
               'image'=>'nullable|image|mimes:png,jpeg,jpg',
            ]);
   
          $posts->update([
               'title'=> $request->title,
               'description'=> $request->description,
               'updated_at' =>now(),
   
               
            ]);
   
            return redirect()->route('posts.index')->with('success', 'Successfully Post Update  ');
       
       

    }
    public function destroy($id){
        $posts = Post::find($id);
        $posts->delete();
        return back()->with('success', 'Successfully Post deleted ');

    }

    public function statusUpdate($id){
        $posts = Post::find($id);
        
        return $posts;
    } 
}
