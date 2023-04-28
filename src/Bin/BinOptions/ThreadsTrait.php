<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ThreadsTrait
{
    /**
     * Число параллельно работающих потоков (по умолчанию 1)
     * @param int|null $threads
     * @return $this
     */
    final public function threads(int|null $threads = null): static
    {
        $threads ??= 1;
        $this->setOptions('-threads ' . $type);
        return $this;
    }
}