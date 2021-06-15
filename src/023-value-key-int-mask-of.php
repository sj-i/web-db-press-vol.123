<?php

class Flags
{
    public const FLAG_A = 0b001;
    public const FLAG_B = 0b010;
    public const FLAGS_NAMES = [
        self::FLAG_A => 'FLAG_A',
        self::FLAG_B => 'FLAG_B',
    ];

    /**
     * @param key-of<Flags::FLAGS_NAMES> $flag
     * @return value-of<Flags::FLAGS_NAMES>
     */
    public function flagToName(int $flag): string {
        return self::FLAGS_NAMES[$flag];
    }
}

(new Flags)->flagToName(Flags::FLAG_A);
// (注:FLAGS_NAMESのキーに0b011はないので型エラー)
(new Flags)->flagToName(0b011);

/**
 * @param int-mask-of<
 *   key-of<Flags::FLAGS_NAMES>
 * > $flags
 */
function useFlag(int $flags): void {}
useFlag(0b011);
// (注:ビットマスクに0b100は含まれないので型エラー)
useFlag(0b100);
