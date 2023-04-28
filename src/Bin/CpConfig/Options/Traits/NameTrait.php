<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits;

trait NameTrait
{

    final public function name(string $name): static
    {
        $this->setOptions('-name "' . $name . '"');
        return $this;
    }
}