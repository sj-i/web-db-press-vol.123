<?php

// (注:子クラスでもコンストラクタのシグネチャが
// 変わらないことを保証)
/** @psalm-consistent-constructor */
class A {}

/**
 * @template T of A
 * @param class-string<T> $class_name
 * @return T
 */
function createInstance(string $class_name) {
    return new $class_name();
}
// (注:A::classでclass-string<A>が得られる)
$a = createInstance(A::class);
// (注:$aはAのインスタンスと型推論される)
