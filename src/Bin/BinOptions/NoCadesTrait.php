<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoCadesTrait
{
    /**
     * Запретить использование вложенных в подписи доказательств
     * @return $this
     */
    final public function nocades(): static
    {
        $this->setOptions('-nocades');
        return $this;
    }
}