<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 28.05.2019
 * Time: 19:43
 */

namespace App\L\Ex;


class CompositeView extends AbstractView
{

    protected  $_views = array();

    public function addView(AbstractView $view)
    {
        $this->_views[] = $view;
        return true;
    }

    public function addViews(array $views)
    {
        foreach ($views as $view) {
            $this->addView($view);
        }
    }

    public function render()
    {
        $output = "";

        if(!empty($this->_views)) {
            foreach ($this->_views as $view) {
                $output .= $view->render();
            }
        }


        $output .= $this->_render();
        return $output;

    }
}