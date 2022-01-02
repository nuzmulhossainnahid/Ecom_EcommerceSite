<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    private static $image;
    private static $imageName;
    private static $directory;
    private static $extension;
    
    
    public static function getImageurl($request)
    {
        self::$image = $request->file('image');
        if(self::$image)
        {
            self::$extension = self::$image->getCliendtOriginalExtension();
            self::$imageName =  time().'.'.self::$extension;
            self::$directory = 'category-image/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory.self::$imageName;
            
        }else{
            return '';
        }
    }
}
