<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoRevTrait
{
    /**
     * Не проверять сертификаты в цепочке на предмет отозванности
     * @return $this
     */
    final public function norev(): static
    {
        $this->setOptions('-norev');
        return $this;
    }
}