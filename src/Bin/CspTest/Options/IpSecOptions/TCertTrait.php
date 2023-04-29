<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait TCertTrait
{
    /**
     * @param string $filePath
     * @return $this
     */
    final public function trustedCertificate(string $filePath): static
    {
        $this->setOptions('-tcert "' . $filePath . '"');
        return $this;
    }
}