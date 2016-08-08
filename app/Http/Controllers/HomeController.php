<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Post;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function products()
    {
        $products= Product::paginate(9);

        // return view('pages.products', ['products' => $products]);
        return view('pages.products', compact('products'));
    }

    public function posts()
    {
        $posts = Post::paginate(10);

        return view('pages.posts', compact('posts'));
    }
    public function post($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.post', compact('post'));
    }

    public function profile($id)
    {
        if(!Auth::user()) {            
            return redirect()->back();
        } 

        // $user = Auth::user();

        $user = User::findOrFail($id);
        // dd($user->name);

        return view('pages.profile', compact('user'));
    }


    public function editProfile($id)
    {
        return "Profile picture changed/added.";
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product', compact('product'));
    }
}
