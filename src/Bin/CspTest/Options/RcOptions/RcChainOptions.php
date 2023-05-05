<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;

final class RcChainOptions extends Options
{
    public function userStore(): RcStoreOption
    {
        $this->setOptions('-chain');
        $opt = new RcStoreOption();
        $this->setOptions($opt);
        return $opt;
    }

    public function localStore(): RcStoreOption
    {
        $this->setOptions('-Chain');
        $opt = new RcStoreOption();
        $this->setOptions($opt);
        return $opt;
    }
}