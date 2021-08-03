<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:20
 */

namespace App\S;


class HtmlTemplate implements Template
{

    function render($data)
    {
        echo '<h1>'.$data.'</h1>';
    }
}