<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:07
 */

namespace App\D;


class Report implements  IReport
{

    private $view;

    /**
     * @return View
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param View $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

    /**
     * Report constructor.
     * @param $view
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function getDoctor() {
        return "Doctor";
    }

    public function getPatient() {
        return "Patient";
    }

    public function getData() {
        return "Data";
    }

    /**
     * @return string
     */
    public function renderReport() : string {
        return $this->getView()->render($this->getDoctor(), $this->getPatient(),$this->getData());
    }

}