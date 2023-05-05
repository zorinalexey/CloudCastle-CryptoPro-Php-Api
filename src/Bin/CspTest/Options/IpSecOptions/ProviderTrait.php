<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait ProviderTrait
{
    /**
     * @param string $providerName
     * @return $this
     */
    public function provider(string $providerName): self
    {
        $this->setOptions('-provider "' . $providerName . '"');
        return $this;
    }
}