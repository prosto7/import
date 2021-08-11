<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Article;
use Illuminate\Support\Facades\DB;
use App\Models\Files;

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
            $size = round($size / 1024, 2) ;
            DB::insert('insert into files (link, size,created_at) values (?,?,?)', [$link,$size,date("Y-m-d H:i:s")]); 
            return redirect('/')->with('success', 'File added');
    }

    public function getData()
    {
        return view('welcome', ['files' =>  Files::all()]);
    }


}
