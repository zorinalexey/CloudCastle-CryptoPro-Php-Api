<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DmTrait
{

    /**
     * Скопировать в хранилище компьютера (LOCAL_MACHINE)
     * @return $this
     */
    final public function dm(): static
    {
        $this->setOptions('-dm');
        return $this;
    }
}