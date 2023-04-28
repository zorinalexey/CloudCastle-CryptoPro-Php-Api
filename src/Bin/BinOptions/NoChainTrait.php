<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoChainTrait
{
    /**
     * Не проверять цепочки найденных сертификатов
     * @return $this
     */
    final public function nochain(): static
    {
        $this->setOptions('-nochain');
        return $this;
    }
}