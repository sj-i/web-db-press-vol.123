<?php

function f(mixed $mixed): void {
    // (注:型エラー：mixedはintをとる関数へ渡せない)
    $s = intToString($mixed);
    assert(is_int($mixed));
    // (注:intと推論され型エラーが出ない)
    $s = intToString($mixed);
}
