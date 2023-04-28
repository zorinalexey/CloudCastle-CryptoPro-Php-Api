<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait KeepExportableTrait
{

    /**
     * Пометить импортированные ключи как экспортируемые.
     * @return $this
     */
    final public function keepExportable(): static
    {
        $this->setOptions('-keep_exportable');
        return $this;
    }
}