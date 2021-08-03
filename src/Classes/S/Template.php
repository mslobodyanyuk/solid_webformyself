<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:19
 */

namespace App\S;


interface Template
{
    function render($data);
}