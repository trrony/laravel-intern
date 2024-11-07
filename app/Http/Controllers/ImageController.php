<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('upload', ['imageInfos' => Image::all()]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg, png|max:2048',
        ]);
        Image::newImage($request);
        return back()->with('message', 'Image Info Uploaded Successfully');
    }
    public function details($id)
    {
        return view('details', ['imageInfo' => Image::find($id)]);
    }
    public function delete($id)
    {
        Image::deleteImage($id);
        return back()->with('messsage', 'Image Info Deleted Successfully');
    }

}
