<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class MediaController extends Controller {

    function index() {
        $contents = Storage::dist('public')->ListContents();

        $data = [
            'contents'=> $contents
        ];

        return view('media/index', $data);
    }
}