<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits;

trait LevelTrait
{
    final public function level(int $level): static
    {
        $this->setOptions('-level ' . $level);
        return $this;
    }
}