<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Get the list of users
        $users = User::orderBy('created_at', 'desc')->paginate(5);

        // Get the list of posts
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('dashboard', [
            'users' => $users,
            'posts' => $posts
        ]);
    }

}
