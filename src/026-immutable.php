<?php

/** @immutable */
abstract class TestClass
{
    public function __construct(
        public ?int $nullable_int
    )
    {
    }

    abstract public function doSomething(): int;
}

function takesInt(int $i): void
{
}

function f(TestClass $test_class): void
{
    if (is_null($test_class->nullable_int)) {
        return;
    }

    $_ = $test_class->doSomething();

    // (注:型エラー、doSomething内でnullになる可能性)
    takesInt($test_class->nullable_int);
}
