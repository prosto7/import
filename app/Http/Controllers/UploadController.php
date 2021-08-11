<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Article;
use Illuminate\Support\Facades\DB;


class UploadController extends Controller
{
    public function getForm()
    {
        return view('welcome');
    }

    public function upload(Request $request)
    {
  
            $path = $request->file('file')->store('uploads','public');
            $link = Storage::path($path);
            $size = Storage::size($path);  
            $size = round($size / 1048576.2 , 2) ;
            DB::insert('insert into files (link, size) values (?,?)', [$link,$size]);  
        
        
    }
}
