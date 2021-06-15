<?php

/** @template T */
trait TestTrait {}
class TraitUser
{
    /** @use TestTrait<int> */
    use TestTrait;
}
