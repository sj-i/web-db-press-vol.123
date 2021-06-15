<?php

/** @psalm-type Alias = array{field: string} */
class TestClass
{
    /** @var Alias $var*/
    public $var;
}

/** @psalm-import-type Alias from Test */
/** @psalm-import-type Alias from Test as Alias2 */

/** @psalm-type int1 = int */
/** @psalm-type int2 = int */

// (注:このような定義はできない)
/** @psalm-type Arr = array{member: Arr} */
