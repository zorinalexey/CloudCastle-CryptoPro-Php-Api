<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ProvtypeTrait
{

    /**
     * Тип провайдера (значение по умолчанию 75).
     * @param int|null $type Тип провайдера (значение по умолчанию 75).
     * @return $this
     */
    final public function provtype(int|null $type = null): self
    {
        $type ??= 75;
        $this->setOptions('-provtype ' . $type);
        return $this;
    }
}