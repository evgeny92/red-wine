<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeValidation;
use Illuminate\Http\Request;
use NZTim\Mailchimp\MailchimpFacade;


class SubscribeController extends Controller {

   public function postSubscribe(SubscribeValidation $request){

      $result = false;

      $listId = '8dd74e4348';
      $email = $request->input('sub_email');

      if($request->ajax() && !(MailchimpFacade::check($listId, $email)) && !empty($request->all())){

         /*if(MailchimpFacade::check($listId, $email)){
          }*/
         MailchimpFacade::subscribe(
            $listId,
            $request->input('sub_email'),
            [], //mergeFields
            false //confirm
         );
         $result = true;
      }
      return response()->json(['result' => $result]);
   }
}
