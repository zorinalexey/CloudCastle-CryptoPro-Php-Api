<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait SMimeTrait
{
    /**
     * включить возможности S/MIME (только Windows)
     * @return $this
     */
    final public function smime(): static
    {
        $this->setOptions('-smime');
        return $this;
    }
}