<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Post;
use Auth;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
    	$users = User::all();

    	return view('admin.index')->withUsers($users);
    }
}