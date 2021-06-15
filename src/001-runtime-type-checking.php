<?php

function f(int $i): string {
    if ($i < 0) {
        return null;
    }
    return (string)$i;
}
