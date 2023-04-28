<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait StrictTrait
{

    /**
     * Использовать однозначное кодирование DER вместо BER
     * @return $this
     */
    final public function strict(): static
    {
        $this->setOptions('-strict ');
        return $this;
    }
}