<?php
/*
 * 6. Объясните результаты в этом случае.
*/
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();     // 1 статическое поле $x принадлежит классу A
$b1->foo();     // 1 статическое поле $x принадлежит классу B
$a1->foo();     // 2 поле $x принадлежащее классу A увеличивается на единицу
$b1->foo();     // 2 поле $x принадлежащее классу B увеличивается на единицу
