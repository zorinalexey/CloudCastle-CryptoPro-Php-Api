<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\SignOptions;

trait IpSecPasswordTrait
{

    /**
     * @param string $password
     * @return IpSecPasswordTrait|SignOptions
     */
    final public function password(string $password): self
    {
        $this->setOptions('-passwd ' . $password);
        return $this;
    }
}