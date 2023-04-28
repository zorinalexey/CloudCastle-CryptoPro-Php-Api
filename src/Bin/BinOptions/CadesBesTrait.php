<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CadesBesTrait
{
    /**
     * создать подписи CAdES-BES
     * @return $this
     */
    public function cadesbes(): static
    {
        $this->setOptions('-cadesbes');
        return $this;
    }
}