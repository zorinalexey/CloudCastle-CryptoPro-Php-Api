<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait StampChainCheckTrait
{
    /**
     * Проверить цепочку сертификата в штампе времени
     * @return $this
     */
    final public function stampchaincheck(): static
    {
        $this->setOptions('-stampchaincheck');
        return $this;
    }
}