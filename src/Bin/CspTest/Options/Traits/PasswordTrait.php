<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait PasswordTrait
{

    /**
     * @param string $pin
     * @return $this
     */
    final public function password(string $pin): self
    {
        $this->setOptions('-password ' . $pin);
        return $this;
    }
}