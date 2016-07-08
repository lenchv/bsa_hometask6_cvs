<?php
namespace Library;

class OtherClass extends MyClass {
  public function timeNow() {
    return date("H:i:s", time());
  }
}
