<?php

namespace App\Trait;


trait Media
{
    public function getFileName($media)
    {
        $file_extention = (string)$media->getClientOriginalExtension();
        $file_name = time() . "." . $file_extention;
        if (strcmp($file_extention, 'mp4') == 0 || strcmp($file_extention, 'mov') == 0 || strcmp($file_extention, 'ogg') == 0) {
            $path = 'videos/Post-Video';
        } else {

            $path = 'images/Post-Image';
        }
        $media->move($path, $file_name);
        return $file_name;
    }

    public function editImageProfile($media)
    {
        $file_extention = (string)$media->getClientOriginalExtension();
        $file_name = time() . "." . $file_extention;
            $path = 'images/user-profile';
        $media->move($path, $file_name);
        return $file_name;
    }
}
