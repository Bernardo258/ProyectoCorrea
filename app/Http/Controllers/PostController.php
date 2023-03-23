<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user){
        return view('dashboard');
    }
    

    public function create(){
        return view('post.create');
    }

}
