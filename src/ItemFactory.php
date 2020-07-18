<?php

class ItemFactory {

    private static $bindings = [];

    public static function make($abstract, $params): ItemContract
    {
        return new self::$bindings[$abstract](...$params);
    }

    public static function bind($abstract, $concrete)
    {
        self::$bindings[$abstract] = $concrete;
    }
}