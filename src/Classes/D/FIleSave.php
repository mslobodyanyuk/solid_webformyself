<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:59
 */

namespace App\D;


class FIleSave implements Saver
{
    private $filepath;

    /**
     * FIleSave constructor.
     * @param $filepath
     */
    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    public  function save($data) {
        file_put_contents($this->filepath, $data);
    }


}