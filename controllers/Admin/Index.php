<?php

namespace Controllers\Admin;

class Index {
    public function index() {

        $val = new \GF\Validation();
        $val->setRule('url', 'http://az.c@/', null, 'URL is not valid')
            ->setRule('minlength', 'http://az.c/', 50, 'Min length is not valid');
        echo $val->validate() ? 'Valid' : 'Not valid';
        echo '<br>';
        foreach ($val->getErrors() as $error) {
            echo $error . '<br>';
        }
        echo '=========<br/>';

        $view = \GF\View::getInstance();
        $view->username = 'John Doe';
        $view->appendToLayout('body', 'admin.index');
        $view->display('layouts.default', array('email' => 'john.doe@domain.com'));
    }
}
