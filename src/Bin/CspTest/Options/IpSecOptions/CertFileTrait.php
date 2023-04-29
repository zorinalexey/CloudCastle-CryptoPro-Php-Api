<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait CertFileTrait
{
    /**
     * @param string $filePath
     * @return $this
     */
    final public function certificate(string $filePath): static
    {
        $this->setOptions('-certf "' . $filePath . '"');
        return $this;
    }
}