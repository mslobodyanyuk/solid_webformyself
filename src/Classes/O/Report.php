<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:07
 */

namespace App\O;


class Report
{
    public function getDoctor() {
        return "Doctor";
    }

    public function getPatient() {
        return "Patient";
    }

    public function getData() {
        return "Data";
    }

    public function renderReport() {
        return $this->getDoctor().'<br>'.$this->getPatient().'<br>'.$this->getData();
    }

}