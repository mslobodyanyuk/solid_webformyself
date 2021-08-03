<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 28.06.2019
 * Time: 12:43
 */

namespace App\D;


interface IReport
{
    function renderReport() : string;
}