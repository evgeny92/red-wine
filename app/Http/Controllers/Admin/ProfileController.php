<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfileValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller {

   /**
    * Display form for changing password
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
   public function showChangePasswordForm(){
      return view('admin.profile.changePassword');
   }

   /**
    * Password change function
    *
    * @param ProfileValidation $request
    * @return \Illuminate\Http\RedirectResponse
    */
   public function changePassword(ProfileValidation $request){

      if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
         // The passwords matches
         return back()->with("error","Your current password does not matches with the password you provided.");
      }

      if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
         //Current password and new password are same
         return back()->with("error","New Password cannot be same as your current password.");
      }

      //Change Password
      $user = Auth::user();
      $user->password = bcrypt($request->get('new_password'));
      $user->save();

      return back()->with("success","Password changed successfully.");
   }

   /**
    * Display form for changing name
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
   public function showChangeNameForm(){
      return view('admin.profile.changeName');
   }

   /**
    * Name change function
    * @param Request $request
    * @return \Illuminate\Http\RedirectResponse
    */
   public function changeName(Request $request){

      $this->validate($request, [
         'name' => 'required|min:2|max:20'
      ]);

      $user = Auth::user();
      $user->name = $request->get('name');
      $user->save();
      return back()->with("success","Name changed successfully.");

   }

   /**
    * Display form for changing name
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
   public function showChangeEmailForm(){
      return view('admin.profile.changeEmail');
   }

   public function changeEmail(Request $request){
      $this->validate($request, [
         'email' => 'required|email|max:50|unique:users'
      ]);

      $user = Auth::user();
      $user->email = $request->get('email');
      $user->save();
      return back()->with("success","Email changed successfully.");
   }
}
