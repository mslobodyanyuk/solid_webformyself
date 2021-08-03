<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 29.05.2019
 * Time: 19:21
 */

namespace App\I\B;


class QuickOrder implements Orderable
{

    function getPaymentMethod()
    {
        throw new \Exception("Error payment");
    }

    function getShipmentMethod()
    {
        throw new \Exception("Error shipment");

    }

    function getDiscount()
    {
        throw new \Exception("Error Discount");

    }

    function getTotalPrice()
    {
        return 100;
    }

    function getClientInfo()
    {
        return "Phone";
    }

    function getComment()
    {
        throw new \Exception("Error comment");

    }
}