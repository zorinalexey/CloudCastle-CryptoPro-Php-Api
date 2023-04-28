<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait StdinTrait
{


    /**
     * Использовать для ввода данных стандартный поток ввода stdin.
     * @return $this
     */
    final public function stdin(): static
    {
        $this->setOptions('-stdin');
        return $this;
    }
}