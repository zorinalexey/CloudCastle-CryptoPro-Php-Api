<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ChainTrait
{

    /**
     * Отображать цепочку сертификатов.
     * @return $this
     */
    final public function chain(): static
    {
        $this->setOptions('-chain');
        return $this;
    }
}