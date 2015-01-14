<?php

class IndexController extends Yaf_Controller_Abstract {
    public $actions = array(
        'action' => 'actions/Action.php',
    );

	public function init() {
		$this->_view->assign(Yaf_Registry::get("config")->common->toArray());
        $this->_view->assign('webroot', $this->getRequest()->getBaseUri());
	}

	public function indexAction() {
	}
}
