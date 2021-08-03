<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:25
 */

namespace App\S;


class PhpTemplate implements Template
{

    function render($data)
    {
        echo '<h2>'.$data.'</h2>';
    }
}