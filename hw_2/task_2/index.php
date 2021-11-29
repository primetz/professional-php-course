<?php
/*
 * 2. *Реализовать паттерн Singleton при помощи traits.
*/
trait Singleton
{
    private static $instance;

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function doAction()
    {
        echo 'Action from trait';
    }
}

class A
{
    use Singleton;
}

A::getInstance()->doAction();
