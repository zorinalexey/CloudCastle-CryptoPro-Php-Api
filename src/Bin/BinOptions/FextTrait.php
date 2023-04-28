<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FextTrait
{

    /**
     * Задать расширение для сообщений
     * @param string $ext
     * @return $this
     */
    final public function fext(string $ext): static
    {
        $this->setOptions("-fext ." . trim($ext, '.'));
        return $this;
    }
}