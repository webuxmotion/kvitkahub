<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ResizeImage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function storeImage(Request $request, $name = 'image', $dest = '')
    {
        $request->validate([
            $name => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        $path = public_path('storage/' . $dest);
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $fileName = time() . '.' . $request->$name->extension();
        
        ResizeImage::make($request->file($name))
            ->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($path . $fileName);

        return $dest . $fileName;
    }
}
