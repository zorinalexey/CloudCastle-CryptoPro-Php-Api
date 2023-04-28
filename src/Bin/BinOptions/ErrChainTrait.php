<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ErrChainTrait
{
    /**
     * Завершать выполнение с ошибкой, если хотя бы один сертификат не прошел проверку
     * @return $this
     */
    final public function errchain(): static
    {
        $this->setOptions('-errchain');
        return $this;
    }
}