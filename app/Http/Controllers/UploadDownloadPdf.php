<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadDownloadPdf extends Controller
{
    public function uploadpdf(Request $request){

        $file=$request->file("file");         
        $nombre = "pdf_".time().".".$file->guessExtension();
        $ruta = public_path("pdf/".$nombre);
        $sms = "";
        if($file->guessExtension()=="pdf"){
            copy($file, $ruta);
            $sms = "Archivo Subido Correctamente";
        }else{
            $sms = "Formato no valido";
        }

        return redirect()->back()->with("success", $sms);
    }
}
