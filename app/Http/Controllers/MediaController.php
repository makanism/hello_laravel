<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MediaController extends Controller {
    function upload(Request $request){
        $success = false;
        if($request->isMethod('post')){
            //Ambil file dari request
            $mainpicture=$request->file('mainpicture');
        if($mainpicture){
            //simpan file
            $dir = storage_path('app/public');
            $mainpicture->move($dir, $mainpicture->getClientOriginalName());
        }
        //handle gallery
        $gallery = $request->file('gallery');
            
        $dir= storage_path('app/public');
        //simpan file
        foreach($gallery as $picture){
            $picture->move($dir, $picture->getClientOriginalName());
        }
        
        $success=true;  
        }
    $data = ['success'=>$success];
    return view('media/upload',$data);
    }

    //function upload(){
    //$data = ['success'=>false];
    //return view('media/upload',$data);
    //}

    function index(){
        //ambil data file, Disk(data dari file system)
        $contents = Storage::disk('public')->listContents();
        $data = [ 'contents'=>$contents];
        return view('media/index',$data);
    }
}
?>