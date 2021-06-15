<?php

function intToString(int $i): string {
    return (string)$i;
}

function f(int $i): void {
    $s = intToString($i);
    intToString($s);
}
