<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ContTrait
{
    /**
     * Задать имя ключевого контейнера
     * @param string $container
     * @return $this
     */
    final public function container(string $container): static
    {
        $this->setOptions('-cont "' . $container . '"');
        return $this;
    }
}