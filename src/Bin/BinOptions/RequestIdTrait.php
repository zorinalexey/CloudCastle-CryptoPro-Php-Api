<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait RequestIdTrait
{

    /**
     * Указать идентификатор запроса на сертификат
     * @param string $id Идентификатор запроса
     * @return $this
     */
    final public function requestId(string $id): static
    {
        $this->setOptions('-requestid ' . $id);
        return $this;
    }
}