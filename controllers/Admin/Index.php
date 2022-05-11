<?php

namespace Controllers\Admin;

class Index {
    public function index() {
        $view = \GF\View::getInstance();
        $view->username = 'John Doe';
        $view->display('admin.index', array('email' => 'john.doe@domain.com'));
    }
}
