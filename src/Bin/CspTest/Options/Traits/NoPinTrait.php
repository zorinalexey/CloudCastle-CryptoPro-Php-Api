<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait NoPinTrait
{

    /**
     * @return $this
     */
    final public function noPin(): static
    {
        $this->setOptions('-nopin');
        return $this;
    }
}