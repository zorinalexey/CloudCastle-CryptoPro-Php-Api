<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FromRequestTrait
{
    final public function fromRequest(): static
    {
        $this->setOptions('-from_request');
        return $this;
    }
}