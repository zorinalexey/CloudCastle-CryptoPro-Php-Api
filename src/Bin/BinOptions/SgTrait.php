<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait SgTrait
{

    /**
     * Использовать контейнер пользователя (CURRENT_USER)
     * @return $this
     */
    final public function sg(): static
    {
        $this->setOptions('-sg');
        return $this;
    }
}