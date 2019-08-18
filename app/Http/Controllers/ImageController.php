<?php

namespace App\Http\Controllers;
//use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function index()
    {
    
        $img = Image::make('/public/hooded.jpeg')->resize(300, 200);
        return $img->response('jpeg');

    }
}
