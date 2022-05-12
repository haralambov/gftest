<?php

namespace Controllers\Admin;

class Index extends \GF\DefaultController {

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

        $this->view->username = 'John Doe';
        $this->view->appendToLayout('body', 'admin.index');
        $this->view->display('layouts.default', array('email' => 'john.doe@domain.com'));
    }
}
