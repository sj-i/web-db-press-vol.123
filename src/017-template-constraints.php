<?php

class A {}

/** @template T of A */
class TestClass
{
    /** @param T $value */
    public function __construct(private $value) {}
}

new TestClass(new A()); // (注:Aは使える)
new TestClass(0); // (注:型エラー)
