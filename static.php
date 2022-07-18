<?php

class Foo {
   public static $year = 1971;
   public static function getNumbers() {
 return range(1, 31);
 }
}
echo Foo::getNumbers();
echo Foo::$year;
?>