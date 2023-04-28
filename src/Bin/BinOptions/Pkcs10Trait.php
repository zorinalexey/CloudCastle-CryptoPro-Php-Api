<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait Pkcs10Trait
{
    /**
     * Работать с PKCS#10-файлом.
     * @return $this
     */
    final public function pkcs10(): static
    {
        $this->setOptions('-pkcs10');
        return $this;
    }
}