<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait KeepBadFilesTrait
{

    /**
     * Не удалять выходной файл при ошибке
     * @return $this
     */
    final public function keepbadfiles(): static
    {
        $this->setOptions('-keepbadfiles');
        return $this;
    }
}