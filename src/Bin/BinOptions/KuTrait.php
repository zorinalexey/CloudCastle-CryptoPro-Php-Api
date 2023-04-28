<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait KuTrait
{

    /**
     * Использовать контейнер пользователя (CURRENT_USER)
     * @return $this
     */
    final public function ku(): static
    {
        $this->setOptions('-ku');
        return $this;
    }
}