<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait InputFileTrait
{
    /**
     * @param string $filePath
     * @return $this
     */
    final public function inputFile(string $filePath): static
    {
        $this->setOptions('-infile "' . $filePath . '"');
        return $this;
    }
}