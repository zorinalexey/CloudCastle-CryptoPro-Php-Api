<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait SignatureTrait
{

    final public function signature(string $file):static
    {
        $this->setOptions('-signature "'.$file.'"');
        return $this;
    }
}