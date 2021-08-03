<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 29.05.2019
 * Time: 19:19
 */

namespace App\I\B;


interface Orderable
{
    function getPaymentMethod();
    function getShipmentMethod();
    function getDiscount();
    function getTotalPrice();
    function getClientInfo();
    function getComment();
}