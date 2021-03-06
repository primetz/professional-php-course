<?php
/*
 * 5. Дан код. Что он выведет на каждом шаге? Почему?
*/
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();     // 1 статическое поле $x принадлежит классу, а не экземплярам класса,
$a2->foo();     // 2 поэтому неважно зи какого экземпляра класса вызывается метод foo(),
$a1->foo();     // 3 $x будет увеличиваться на единицу,
$a2->foo();     // 4 при каждом вызове метода foo().
