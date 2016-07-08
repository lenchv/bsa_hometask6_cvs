<?php
class MyClass {
  public static function dateNow() {
    return date("d.m.Y", time());
  }
}

echo MyClass::dateNow() . PHP_EOL;
