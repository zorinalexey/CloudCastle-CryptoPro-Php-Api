<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;

final class LowSignOption extends Options
{
    /**
     * @return SignOptions
     */
    public function sign():SignOptions
    {
        $opt = new SignOptions();
        $this->setOptions('-sign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return SignOptions
     */
    public function addSign():SignOptions
    {
        $opt = new SignOptions();
        $this->setOptions('-addsign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return SignOptions
     */
    public function verify():SignOptions
    {
        $opt = new SignOptions();
        $this->setOptions('-verify');
        $this->setOptions($opt);
        return $opt;
    }
}