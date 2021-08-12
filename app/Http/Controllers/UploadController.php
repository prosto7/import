<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Validator;
use App\Http\Requests\UploadFile;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Article;
use Illuminate\Support\Facades\DB;
use App\Models\Files;
use Illuminate\Database\Eloquent\Collection;


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

        $files = DB::table('files')->simplePaginate(10);
        return view('welcome', ['files' =>  $files] );
    }

}
