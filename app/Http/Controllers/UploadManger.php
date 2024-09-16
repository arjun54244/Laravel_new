<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadManger extends Controller
{

    function uploadFile(){
        return view('fileUplode');
    }
    function uploadFilePost(Request $request){
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        ]);
        $file = $request->file('file');
       return $file->storeAs('public', $file->getClientOriginalName()); 
    }
}
