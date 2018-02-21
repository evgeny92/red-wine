<?php

namespace App\Http\Controllers;

use App\Category;
use App\FileUpload;
use App\Http\Requests\ContactValidation;
use App\Mail\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller {

   //page home
   public function getHome(){
      $posts = Post::limit(2)->get();
      return view('pages.home', compact('posts'));
   }

   //page about
   public function getAbout(){
      return view('pages.about');
   }

   //page gallery
   public function getGallery(){
      $images = FileUpload::all();
      return view('pages.gallery', compact('images'));
   }

   //page blog
   public function getBlog(){
      $posts = Post::latest()->paginate(3);
      $categories = Category::all();
      return view('pages.blog.blog', compact('posts', 'categories', 'user'));
   }

   //single blog page
   public function getSingleBlogPage($slug_post){
      $post = Post::where('slug_post', $slug_post)->firstOrFail();
      $categories = Category::all();
      return view('pages.blog.single', compact('post', 'categories'));
   }

   //page category
   public function getCategory($slug_cat){
      $category = Category::where('slug_cat', $slug_cat)->firstOrFail();
      $categories = Category::all();
      return view('pages.blog.category', compact('category', 'categories'));
   }

   //page contact
   public function getContact(){
      return view('pages.contact');
   }

   public function postContact(ContactValidation $request){

      $result = false;

      if($request->ajax() && !empty($request->all())){
         $contact = $request;
         Mail::to('evgeny@mail.ru')->send(new Contact($contact));
         $result = true;
      }
      return response()->json(['result' => $result]);
   }
}