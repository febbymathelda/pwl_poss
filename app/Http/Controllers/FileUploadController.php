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
        $path=$request->berkas->storeAs('public', $namaFile);

        $pathBaru=asset('storage/'.$namaFile);
        echo "Proses upload berhasil, data disimpan pada: $path";
        echo "<br>";
        echo "Tampilkan Link:<a href='$pathBaru'>$pathBaru</a>";
    }
}
