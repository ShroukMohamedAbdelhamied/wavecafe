<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;

trait UploudFile
    {
        public function upload($imageFile, $path){
            $imgExt= $imageFile->getBeverageOriginalExtension();
            $fileName = time() . '.' . $imgExt;
            $path = 'assets/images';
            $imageFile->move($path, $fileName);
            return $fileName;
        }
    }
