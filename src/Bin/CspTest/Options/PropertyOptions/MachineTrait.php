<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;

trait MachineTrait
{

    final public function machine(): self
    {
        $this->setOptions('-machine');
        return $this;
    }
}