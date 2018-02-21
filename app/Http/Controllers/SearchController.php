<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller {

   public function search(Request $request){
      $this->validate($request,['search'=>'required']);
      $search = $request->search;
      $categories = Category::all();
      $posts = Post::where('title', 'like', '%'.$search.'%')->paginate(3);
      return view('pages.blog.blog', compact('posts', 'categories', 'search'));
   }

}
