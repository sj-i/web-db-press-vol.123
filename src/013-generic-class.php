<?php

/** @template T */
class Generic
{
    /** @param T $value */
    public function __construct(public $value) {}

    /** @param Generic<T> $another */
    public function equals(Generic $another): bool {
        return $this->value === $another->value;
    }
}

/** @return Generic<int> */
function wrapInt(int $i): Generic {
    return new Generic($i);
}

/** @return Generic<string> */
function wrapString(string $s): Generic {
    return new Generic($s);
}

$wrapped_int = wrapInt(1);
$wrapped_string = wrapString('a');
// (注:型エラー、引数にGeneric<int>を期待)
$wrapped_int->equals($wrapped_string);
