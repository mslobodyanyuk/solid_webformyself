<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 29.05.2019
 * Time: 19:33
 */

namespace App\I\G;


class Order implements OrderInterface, PaymentInterface, ShipmentInterface, DiscountInterface
{

    function getTotalPrice()
    {
        // TODO: Implement getTotalPrice() method.
    }

    function getClientInfo()
    {
        // TODO: Implement getClientInfo() method.
    }

    function getDiscount()
    {
        // TODO: Implement getDiscount() method.
    }

    function getPaymentMethod()
    {
        // TODO: Implement getPaymentMethod() method.
    }

    function getShipmentMethod()
    {
        // TODO: Implement getShipmentMethod() method.
    }
}