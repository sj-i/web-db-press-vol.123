<?php

function (?int $nullable_int): void {
    if (is_null($nullable_int)) {
        // (注:このブロック内では$nullable_intの型はnull)
        throw new \LogicException();
    }
    // (注:この先で$nullable_intはint型)
    $s = intToString($nullable_int);
}
