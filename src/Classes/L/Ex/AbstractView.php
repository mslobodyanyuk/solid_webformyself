<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 28.05.2019
 * Time: 19:33
 */

namespace App\L\Ex;


use Exception;

abstract class AbstractView
{
    public $content;
    protected $_template;

    /**
     * AbstractView constructor.
     * @param $content
     */
    public function __construct($template = null)
    {
        if($template !== null) {
            $this->setTemplate($template);
        }
    }

    public function setTemplate($template)
    {
        $template = TEMPLATE . '/templates'.DIRECTORY_SEPARATOR. $template;

        if(!file_exists($template)) {
            throw new Exception('Invalid template');
        }

        $this->_template = $template;
    }

    public function getTemplate() {
        return $this->_template;
    }

    protected  function _render() {
        if($this->_template !== null) {
            extract(['content' => $this->content]);
            ob_start();
            include $this->_template;
            return ob_get_clean();
        }

        return '';
    }

    abstract public function addView(AbstractView $view);
    abstract public function addViews(array $views);
    abstract public function render();


}