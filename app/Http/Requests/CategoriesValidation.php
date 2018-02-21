<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesValidation extends FormRequest {
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
               'name' => 'required|min:5|max:50',
               'slug_cat' => 'required|min:5|alpha_dash|max:50|unique:categories,slug_cat'
            ];
         }
         CASE 'PUT':
         CASE 'PATCH':{
            return [
               'name' => 'required|min:5|max:50',
               'slug_cat' => 'required|min:5|alpha_dash|max:50|unique:categories,slug_cat,' . $this->category
            ];
         }
         default:
            break;
      }
   }
}
