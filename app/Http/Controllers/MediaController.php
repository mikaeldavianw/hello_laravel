<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class MediaController extends Controller {

    function upload(Request $request) {

        $success = false;
        if($request->isMethod('post')) {

            //ambil file dari request 
            $mainpicture = $request->file('mainpicture');
            if($mainpicture) {
                //simpan file
                $dir= storage_path ('app/public');
                $mainpicture->move($dir, $mainpicture->getClientOriginalName());
            }
            
            //handle gallery
            $gallery = $request->file('gallery');

            $dir = storage_path('app/public');

            foreach ($gallery as $picture) {
                $picture->move($dir, $picture->getClientOriginalName());
            }
           
            $success = true;

            //cek function ini jalan atau tidak 
            //dd($files);
            //cara nyambungin storage ke public ketik dicmd : php artisan storage: link

        }

        $data = [
            'success'=> $success
        ];
        return view('media/upload', $data);
    }

   
    function index() {
        $contents = Storage::disk('public')->ListContents();

        $data = [
            'contents'=> $contents
        ];

        return view('media/index', $data);
    }
}