<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DerTrait
{

    /**
     * Использовать для представления сертификата или CRL кодировку DER (значение по умолчанию).
     * @return $this
     */
    final public function der(): static
    {
        $this->setOptions(' -der');
        return $this;
    }
}