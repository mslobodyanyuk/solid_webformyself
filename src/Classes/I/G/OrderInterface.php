<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 29.05.2019
 * Time: 19:31
 */

namespace App\I\G;


interface OrderInterface
{
    function getTotalPrice();
    function getClientInfo();
}