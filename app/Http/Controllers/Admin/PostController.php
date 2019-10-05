<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::with('category','user')->get();
		$cats = Category::get();
		foreach ($cats as $key => $cat) {
			return $cat->posts;
		}
	}

	public function create()
	{
			//
	}

	public function store(Request $request)
	{
			//
	}

	public function show($id)
	{
			//
	}

	public function edit($id)
	{
			//
	}

	public function update(Request $request, $id)
	{
			//
	}

	public function destroy($id)
	{
			//
	}
}
