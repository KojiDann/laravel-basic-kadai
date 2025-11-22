<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);


        DB::table('posts')->insert([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return redirect('/posts');
    }
}
