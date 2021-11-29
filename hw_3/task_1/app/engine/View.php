<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';


class View
{
    protected FilesystemLoader $loader;
    public Environment $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(dirname(__DIR__) . '/views');
        $this->twig = new Environment($this->loader);
    }
}
