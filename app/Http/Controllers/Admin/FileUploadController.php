<?php

namespace App\Http\Controllers\Admin;

use App\FileUpload;
use App\Http\Requests\FileUploadValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class FileUploadController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){
      $files = FileUpload::latest()->paginate(7);
      return view('admin.gallery.index', compact('files'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(FileUploadValidation $request){

      if($request->hasFile('file')){

         foreach($request->file as $file){
            $fileName = rand() . '.' . $file->getClientOriginalExtension();
            $fileSize = $file->getClientSize();
            $path = public_path('/images/gallery/' . $fileName);
            Image::make($file)->resize(640, 480)->save($path);
            $newFile = new FileUpload();
            $newFile->name = $fileName;
            $newFile->size = $fileSize;
            $newFile->save();
         }
      }
      Session::flash('success', 'The image(s) was successfully added.');
      return redirect()->route('gallery.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int $i
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      $file = FileUpload::find($id);
      File::delete(public_path('images/gallery/' . $file->name));
      $file->delete();

      Session::flash('success', 'The image was successfully deleted.');
      return redirect()->route('gallery.index');
   }
}
