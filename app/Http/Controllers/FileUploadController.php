<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request){
        //dump($request->berkas);
        $request->validate([
            'berkas'=>'required|file|image|max:500',
        ]);
        echo $request->berkas->getClientOriginalName(). "Lolos Validasi";
    }
}
