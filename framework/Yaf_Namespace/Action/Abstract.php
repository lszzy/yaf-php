<?php
/**
 * @todo check an example to see how does it work
 * Yaf Action Abstract
 */

/**
 * @namespace
 */
namespace Yaf;

abstract class Action_Abstract extends Controller_Abstract
{
    protected $_controller = null;
    public function execute()
    {

    }

    /********************lszzy/yaf-php<<********************/
    public function setController(Controller_Abstract $controller)
    {
        $this->_controller = $controller;
    }
    /********************lszzy/yaf-php>>********************/

    public function getController()
    {
        return $this->_controller;
    }
}
