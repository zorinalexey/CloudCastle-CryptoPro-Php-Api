<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait HexTrait
{

    final public function hex(string $hashFunction): static
    {
        setOptions('-hex ' . $hashFunction);
        return $this;
    }
}