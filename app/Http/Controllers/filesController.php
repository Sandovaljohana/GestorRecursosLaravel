<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filesController extends Controller
{
    public function files(){
        return view('files');
    }
    // public function blog(){
    //     $posts = Post::with('user')->get(); 
    //     $posts = Post::get();
        
    //     return view('blog', ['posts'=> $posts]);

    // }
    
}
