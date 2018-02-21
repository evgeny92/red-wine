<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\PostsValidation;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class PostController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){
      $posts = Post::latest()->paginate(5);
      return view('admin.posts.index', compact('posts'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){
      $categories = Category::all();
      return view('admin.posts.create', compact('categories'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(PostsValidation $request){
      $post = new Post();
      $post->title = $request->title;
      $post->slug_post = $request->slug_post;
      $post->category_id = $request->category_id;
      $post->body = $request->body;

      //image
      if($request->hasFile('image')){
         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         $path = public_path('images/posts/' . $filename);
         Image::make($image)->resize(640, 217)->save($path);
         $post->image = $filename;
      }
      $post->save();

      Session::flash('success', 'The post was successfully created.');

      return redirect()->route('posts.create');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Post $post
    * @return \Illuminate\Http\Response
    */
   public function show($id){
      $post = Post::find($id);
      return view('admin.posts.show', compact('post'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Post $post
    * @return \Illuminate\Http\Response
    */
   public function edit($id){
      $post = Post::find($id);
      $categories = Category::all();
      $cats = [];
      foreach($categories as $category){
         $cats[$category->id] = $category->name;
      }
      return view('admin.posts.edit', compact('post', 'cats'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  \App\Post $post
    * @return \Illuminate\Http\Response
    */
   public function update(PostsValidation $request, $id){

      $post = Post::find($id);

      $post->title = $request->title;
      $post->slug_post = $request->slug_post;
      $post->category_id = $request->category_id;
      $post->body = $request->body;

      //image
      if($request->hasFile('image')){
         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         $path = public_path('images/posts/' . $filename);
         Image::make($image)->resize(640, 217)->save($path);
         //add update
         $oldFileName = $post->image;
         $post->image = $filename;
         //delete old photo
         File::delete(public_path('images/posts/' . $oldFileName));
         //Storage::delete($oldFileName);
      }
      $post->save();

      Session::flash('success', 'The post was successfully edited.');
      return redirect()->route('posts.edit', $post->id);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Post $post
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      $post = Post::find($id);
      File::delete(public_path('images/posts/' . $post->image));
      $post->delete();
      Session::flash('success', 'The post was successfully delete.');
      return redirect()->route('posts.index');
   }

}
