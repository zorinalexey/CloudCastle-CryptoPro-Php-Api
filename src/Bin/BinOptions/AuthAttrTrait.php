<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AuthAttrTrait
{
    /**
     * Добавить подписанный атрибут в подпись
     * @return $this
     */
    final public function authattr(): static
    {
        $this->setOptions('-authattr');
        return $this;
    }
}