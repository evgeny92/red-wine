<?php

namespace App\Http\Requests;

use App\Post;
use Illuminate\Foundation\Http\FormRequest;

class PostsValidation extends FormRequest {
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize(){
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules(){

      switch($this->method()){

         CASE 'GET':
         CASE 'DELETE':{
               return [];
            }
         CASE 'POST':{
               return [
                  'title' => 'required|min:15|max:100',
                  'slug_post' => 'required|min:15|alpha_dash|max:100|unique:posts,slug_post',
                  'category_id' => 'required|integer',
                  'image' => 'required|image|max:2048',
                  'body' => 'required',
               ];
            }
         CASE 'PUT':
         CASE 'PATCH':{
               return [
                  'title' => 'required|min:15|max:100',
                  'slug_post' => 'required|min:15|alpha_dash|max:100|unique:posts,slug_post,' . $this->post,
                  'category_id' => 'required|integer',
                  'image' => 'image|max:2048',
                  'body' => 'required',
               ];
            }
         default:
            break;
      }
   }
}
