<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 28.05.2019
 * Time: 19:14
 */

namespace App\L;


class Rectangle
{
    protected  $width;
    protected  $height;

    /**
     * Rectangle constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function area() {
        return $this->width * $this->height;
    }


}