<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions;

final class SfSignOptions extends Options
{

    /**
     * @return SignOptions
     */
    public function sign():SignOptions
    {
        $this->setOptions('-sign');
        $opt= new SignOptions();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return SignOptions
     */
    public function verify():SignOptions
    {
        $this->setOptions('-verify');
        $opt= new SignOptions();
        $this->setOptions($opt);
        return $opt;
    }
}