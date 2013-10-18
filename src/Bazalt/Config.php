<?php

namespace Bazalt;

class Config extends \Pimple
{
    protected static $container = null;

    public static function container($class = null)
    {
        if (!self::$container) {
            $class = ($class) ? $class : 'Bazalt\\Config';
            self::$container = new $class();
        }
        return self::$container;
    }
}