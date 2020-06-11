<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->favorite_posts;
        return view('admin.favorite',compact('posts'));
    }
}
