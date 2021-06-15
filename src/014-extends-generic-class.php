<?php

/** @extends Generic<int> */
class Child extends Generic {}

new Child(1);
new Child('a'); // (注:GenericのTはintのため型エラー)

/**
 * @template T
 * @extends Generic<T>
 */
class Child extends Generic {}