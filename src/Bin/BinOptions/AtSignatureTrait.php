<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AtSignatureTrait
{

    /**
     * Использовать закрытый ключ AT_SIGNATURE вместо AT_KEYEXCHANGE.
     * @return $this
     */
    final public function atSignature(): static
    {
        $this->setOptions('-at_signature');
        return $this;
    }
}