<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ExportTrait
{
    /**
     * Пометить ключи как экспортируемые
     * @return $this
     */
    final public function export(): static
    {
        $this->setOptions('-exprt');
        return $this;
    }
}