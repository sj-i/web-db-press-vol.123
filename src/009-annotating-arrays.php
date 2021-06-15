<?php

// array──PHPの通常の配列
/** @param int[] $p */
/** @param array<string, int> $p */
/** @param array<array-key, int> $p */

// list──連番の整数値添字の配列
/** @param list<string> $p */ // (注:←stringのlist)
/** @param list $p */ // (注:←list<mixed>と等価)

// non-empty-array/non-empty-list──1つ以上の要素があることを保証する
/** @param non-empty-array<array-key, int> $p */
/** @param non-empty-list<int> $p */

// array shapes──オブジェクト的な配列
/** @param array{i: int, s?: string} $p */
/** @param array{0: int, 1: string} $p */
