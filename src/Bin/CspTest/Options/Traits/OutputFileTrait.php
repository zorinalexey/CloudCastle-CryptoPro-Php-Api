<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait OutputFileTrait
{

    /**
     * @param string $filePath
     * @return $this
     */
    final public function outputFile(string $filePath): self
    {
        $this->setOptions('-out "' . $filePath . '"');
        return $this;
    }
}