<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 29.05.2019
 * Time: 19:21
 */

namespace App\I\B;


class Order implements Orderable
{

    function getPaymentMethod()
    {
        return "Webmoney";
    }

    function getShipmentMethod()
    {
        return "Post";

    }

    function getDiscount()
    {
        return 50;

    }

    function getTotalPrice()
    {
        return 100;

    }

    function getClientInfo()
    {
        return "Email, Phone";

    }

    function getComment()
    {
        return "Comment";

    }
}