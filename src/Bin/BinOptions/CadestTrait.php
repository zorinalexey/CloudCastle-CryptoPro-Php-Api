<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CadestTrait
{
    /**
     * Создать подписи CAdES-T
     * @return $this
     */
    public function cadest(): static
    {
        $this->setOptions('-cadest');
        return $this;
    }
}