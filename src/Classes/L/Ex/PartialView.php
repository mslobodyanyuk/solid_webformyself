<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 28.05.2019
 * Time: 19:43
 */

namespace App\L\Ex;


class PartialView extends AbstractView
{

    public function addView(AbstractView $view)
    {
        throw new \Exception("Error add view");
    }

    public function addViews(array $views)
    {
        throw new \Exception("Error add views");

    }

    public function render()
    {
        return $this->_render();
    }
}