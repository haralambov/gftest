<?php

namespace Controllers\Admin;

class Index {
    public function index() {
        $view = \GF\View::getInstance();
        $view->username = 'John Doe';
        $view->appendToLayout('body', 'admin.index');
        $view->display('layouts.default', array('email' => 'john.doe@domain.com'));
    }
}
