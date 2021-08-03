<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 28.05.2019
 * Time: 19:28
 */

namespace App\L;


class Square extends  Rectangle
{

    public function setHeight($height)
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth($width)
    {
        $this->height = $width;
        $this->width = $width;
    }
}