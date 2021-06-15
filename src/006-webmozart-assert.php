<?php

use Webmozart\Assert\Assert;

function f(mixed $mixed): void {
    Assert::integer($mixed);
    // (注:この先で$mixedはintと推論される)
}
