<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }
    public function fileUploadRename(){
        return view('file-upload-rename');
    }
    public function prosesFileUploadRename(Request $request){
        //dump($request->berkas);
        $request->validate(['berkas'=>'required|file|image|max:500',]);
        $extfile=$request->berkas->getClientOriginalExtension();
        $nama_file=$request->input('namaFile');
        $namaFile='web-'.time().".".$nama_file.".".$extfile;

        $path=$request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\","//", $path);
        //echo "Variabel path berisi:$path <br>";

        $pathBaru=asset('gambar/'.$namaFile);
        echo "Gambar berhasil di upload, Di Link:<a href='$pathBaru'>$nama_file.$extfile</a>";
        echo "Proses upload berhasil, data disimpan pada: $path";
        echo "<br>";
        echo "<img src = '$pathBaru' alt = 'Gambar' style = 'max-width: 300px; max-height: 300px;'> ";
    }
}
