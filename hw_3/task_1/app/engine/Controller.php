<?php

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Controller
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function render($template, $data)
    {
        try {
            echo $this->view->twig->render($template, $data);
        } catch (LoaderError | RuntimeError | SyntaxError $e) {
            throw new Error($e->getMessage());
        }
    }
}
