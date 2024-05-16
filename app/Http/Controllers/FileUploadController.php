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
            'berkas'=>'required|file|image|max:500',]);
        $extfile=$request->berkas->getClientOriginalName();
        $namaFile='web-'.time().".".$extfile;
        $path=$request->berkas->storeAs('uploads', $namaFile);
        echo "Proses upload berjasil, file berada di: $path";
    }
}
