<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
	public function datos($id)
	{
		$article = Article::find($id);
		$article->category;
		$article->user;
		$article->tags;
		return view('categories',['article' => $article]);
	}
}
