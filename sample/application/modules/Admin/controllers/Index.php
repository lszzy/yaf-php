<?php
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $admin = new AdminModel();
        $this->_view->assign('name', $admin->getName());
    }
}
