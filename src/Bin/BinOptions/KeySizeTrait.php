<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait KeySizeTrait
{
    /**
     * Установить длину ключа
     * @param int $size Длинна ключа
     * @return $this
     */
    final public function keySize(int $size): static
    {
        $this->setOptions('-keysize ' . $size);
        return $this;
    }
}