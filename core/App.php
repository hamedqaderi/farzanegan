<?php

namespace Farzanegan;

class App
{
  public static $registry = [];

  public static function get($key)
  {
    if (!array_key_exists($key, static::$registry)) {
      throw new \Exception("{$key} doesnt exist in our App repositry");
    }

    return static::$registry[$key];
  }

  public static function set($key, $value)
  {
    static::$registry[$key] = $value;
  }
}