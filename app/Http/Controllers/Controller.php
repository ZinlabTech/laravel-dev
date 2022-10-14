<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        /**
         * What's the difference between these two approaches?
         */

        $posts = Post::all();

        foreach ($posts as $post) {
            echo $post->user->name;
        }

        $posts = Post::with('user')->get();

        foreach ($posts as $post) {
            echo $post->user->name;
        }


        /**
         * Get first user's first post with comments (Assume user id is 1)
         */
        // Use Eloquent

        // Use query builder for same result
    }
}
