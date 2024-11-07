<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    private static $imageInfo, $image, $imageName, $directory, $imageUrl;
    private static function getImageUrl($request)
    {
        self::$image     = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'public/images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl  = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newImage($request)
    {
        self::$imageInfo          = new Image();
        self::$imageInfo->name    = $request->name;
        self::$imageInfo->details = $request->details;
        self::$imageInfo->image   = self::getImageUrl($request);
        self::$imageInfo->save();
    }
    public static function deleteImage($id)
    {
        self::$imageInfo = Image::find($id);
        if(file_exists(self::$imageInfo->image))
        {
            unlink(self::$imageInfo->image);
        }
        self::$imageInfo->delete();
    }
}
