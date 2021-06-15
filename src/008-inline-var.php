<?php

/** @return int */ // (注:←本当はstring)
function f() { return 'a'; }

/** @var string $value */ // (注:←intの型推論を上書き)
$value = f();
