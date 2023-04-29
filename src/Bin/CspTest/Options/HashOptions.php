<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\InputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\OutputFileTrait;

final class HashOptions extends Options
{
    use ProvtypeTrait, AlgTrait, InputFileTrait, OutputFileTrait;

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