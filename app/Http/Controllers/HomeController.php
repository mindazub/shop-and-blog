<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Post;
use Auth;
use App\User;
use Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

    public function editPost($id)
    {
        // dd($id);

        $post = Post::where('id', $id)->first();


        // dd($user->name);

        return view('pages.posts.postEdit', compact('post'));
    }

    public function updatePost($id, Request $request) {

        // dd($request);

        $post = Post::where('id', $id)->first();
        // dd($id);

        $rules = [
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ];

         $validator = Validator::make($data = $request->all(), $rules);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $post->title = $request->title;
        $post->body = $request->body;
        $post->excerpt = $request->excerpt;
        $post->save();

        // dd($user->email);

        return view('pages.post', compact('post'));

    }



    public function editProfile($id)
    {
        // dd($id);

        $user = User::where('id', $id)->first();


        // dd($user->name);

        return view('pages.profile.profile-edit', compact('user'));
    }

    public function updateProfile($id, Request $request) {

        // dd($request);

        $user = User::findOrFail($id);

        // dd($id);

        $rules = [
            'email' => 'required|email',
        ];

         $validator = Validator::make($data = $request->all(), $rules);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $user->email = $request->email;
        $user->save();

        // dd($user->email);

        return view('pages.profile.profile', compact('user'));

    }


    public function profile($id)
    {
        if(!Auth::user()) {            
            return redirect()->back();
        } 

        // $user = Auth::user();

        $user = User::findOrFail($id);
        // dd($user->name);

        return view('pages.profile.profile', compact('user'));
    }


    

    public function product($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product', compact('product'));
    }
}
