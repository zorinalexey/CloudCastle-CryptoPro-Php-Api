<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DnTrait
{

    /**
     * Критерии поиска для сертификата.
     * Если более одного сертификата удовлетворяют заданным критериям,
     * пользователю будет предложено выбрать один из найденных.
     * @param string $searchString
     * @return $this
     */
    final public function dn(string $searchString): static
    {
        $this->setOptions('"' . $searchString . '"', '-dn', ', ');
        return $this;
    }
}