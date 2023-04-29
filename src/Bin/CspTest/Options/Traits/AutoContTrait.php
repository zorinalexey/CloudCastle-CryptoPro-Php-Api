<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait AutoContTrait
{

    /**
     * @return $this
     */
    final public function autoCont(): static
    {
        $this->setOptions('-autocont');
        return $this;
    }
}