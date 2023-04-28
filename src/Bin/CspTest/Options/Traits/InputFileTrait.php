<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait InputFileTrait
{

    /**
     * @param string $filePath
     * @return $this
     */
    final public function inputFile(string $filePath): static
    {
        $this->setOptions('-in "' . $filePath.'"');
        return $this;
    }
}