<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller {

    public function upload() {
        return view('imageUpload');
    }

    public function uploadPost(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $thumbName = 'thumb_' . time() . '.' . $request->image->extension();

        if (!\Illuminate\Support\Facades\File::exists(public_path("images/thumbnails"))) {
            \Illuminate\Support\Facades\File::makeDirectory(public_path("images/thumbnails"), 0777, true, true);
        }

        $request->image->move(public_path('images'), $imageName);
        Image::make(url('images') . '/' . $imageName)->resize(300, 300, function ($const) {
            $const->aspectRatio();
        })->save(public_path('images/thumbnails') . '/' . $thumbName);

        $image = new \App\Models\Image();
        $image->title = $request->title;
        $image->description = $request->description;
        $image->author_id = $request->author ? $request->author : 2;
        $image->filename = $imageName;
        $image->path = public_path('images') . '/' . $imageName;
        $image->thumb = $thumbName;
        $image->save();

        return back()
                        ->with('success', 'success')
                        ->with('image', $imageName);
    }

}
