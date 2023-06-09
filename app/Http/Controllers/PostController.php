<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Profile;
use App\Models\Friend;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(User $user)
    {
        $friends=Auth::user()->follows()->get();
        return view('posts/index')->with(['friends' => $friends]);
    }

    public function show(Profile $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Category $category)
    {
        return view('posts/create');
    }

    public function store(Profile $post, Request $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Profile $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Profile $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
