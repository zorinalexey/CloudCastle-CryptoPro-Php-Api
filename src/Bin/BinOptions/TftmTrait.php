<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait TftmTrait
{


    /**
     * Формат логирования для внутренних сообщений.
     * @param string $flag
     * @return $this
     */
    final public function tfmt(string $flag): static
    {
        $this->setOptions('-tfmt ' . $flag);
        return $this;
    }

}