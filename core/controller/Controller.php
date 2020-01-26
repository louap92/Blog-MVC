
<?php

namespace Core\Controller;

class Controller{
    public function render($view, $values){

        $pathView = str_replace(".", "/", $view);

        ob_start();
        extract($values);
        require $_SERVER['DOCUMENT_ROOT'] . '/mvc2/app/view/' . $pathView . '.php';
        $content = ob_get_clean();
        require $_SERVER['DOCUMENT_ROOT'] . '/mvc2/app/view/' . $this->default . '.php';
    }
}