<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;

final class CertLicOptions extends Options
{

    /**
     * @param string $certFile
     * @return void
     */
    public function check(string $certFile): void
    {
        $this->setOptions('-check -certfile "' . $certFile . '"');
    }

}