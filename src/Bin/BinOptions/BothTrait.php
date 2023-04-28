<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait BothTrait
{

    /**
     * Создать или использовать ключ для обмена с возможностью подписи
     * @return $this
     */
    final public function both(): static
    {
        $this->setOptions('-both');
        return $this;
    }
}