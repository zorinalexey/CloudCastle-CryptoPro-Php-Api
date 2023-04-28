<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait KeyIdTrait
{
    /**
     * Идентификатор ключа для фильтрации.
     * @param string $keyid
     * @return $this
     */
    final public function keyid(string $keyid): static
    {
        $this->setOptions('-keyid ' . $keyid);
        return $this;
    }
}