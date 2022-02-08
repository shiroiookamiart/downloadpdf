<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;

class UploadDownloadPdf extends Controller
{

    public function index(){
        $sql = Files::orderBy("created_at", "DESC")->get();
        return view('welcome', compact('sql'));
    }

    public function uploadpdf(Request $request){

        $file=$request->file("file");         
        $nombre = "pdf_".time().".".$file->guessExtension();
        $ruta = "pdf/".$nombre;
        $sms = "";
        if($file->guessExtension()=="pdf"){
            copy($file, $ruta);
            $save = new Files(array("name"=>$nombre, "dir"=>$ruta));
            $save->save();
            $sms = "Archivo Subido Correctamente";
        }else{
            $sms = "Formato no valido";
        }

        return redirect()->back()->with("success", $sms);
    }

    public function downloadpdf($id){
        $dir = Files::where("id", $id)->first();
        if(isset($dir->id)){
            return response()->download($dir->dir);
        }else{
            return redirect()->back();
        }
    }
}
