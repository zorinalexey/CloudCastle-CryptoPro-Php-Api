<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DestTrait
{
    /**
     * Файл для декодированного сертификата или CRL.
     * @param string $path
     * @return $this
     */
    final public function dest(string $path): static
    {
        $this->setOptions("-dest '" . $path . "'");
        return $this;
    }
}