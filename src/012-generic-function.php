<?php

/**
 * @template T
 * @param T $p
 * @return T
 */
function f(mixed $p): mixed

// (注:intを渡しているので$resultもint)
$result = f(1);
// (注:Aを渡しているので$resultもA)
$result = f(new A());
