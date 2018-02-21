<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){
      $categories = Category::all();
      return view('admin.categories.index', compact('categories'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(CategoriesValidation $request){
      $category = new Category();
      $category->name = $request->name;
      $category->slug_cat = $request->slug_cat;
      $category->save();

      Session::flash('success', 'The category was successfully added.');
      return redirect()->route('categories.index');
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Category $category
    * @return \Illuminate\Http\Response
    */
   public function edit($id){
      $category = Category::find($id);
      return view('admin.categories.edit', compact('category'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  \App\Category $category
    * @return \Illuminate\Http\Response
    */
   public function update(CategoriesValidation $request, $id){
      $category = Category::find($id);
      $category->name = $request->name;
      $category->slug_cat = $request->slug_cat;
      $category->save();

      Session::flash('success', 'The category was successfully updated.');
      return redirect()->route('categories.edit', $category->id);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Category $category
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      $category = Category::find($id);
      $category->delete();

      Session::flash('success', 'The category was successfully deleted.');
      return redirect()->route('categories.index');
   }
}
