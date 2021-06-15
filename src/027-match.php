<?php

/**
 * @psalm-type Pattern = 'a'|'b'
 * @param Pattern $s
 */
function f(string $s): void {
    match ($s) {
        'a' => 1,
        // (注:bがあり得る、考慮漏れで静的にエラー)
    };
}
