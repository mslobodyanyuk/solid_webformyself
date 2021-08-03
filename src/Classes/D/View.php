<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 28.06.2019
 * Time: 12:39
 */

namespace App\D;


class View
{
    public function render($doctor, $patient, $data) {
        return $doctor.'<br>'.$patient.'<br>'.$data;
    }
}