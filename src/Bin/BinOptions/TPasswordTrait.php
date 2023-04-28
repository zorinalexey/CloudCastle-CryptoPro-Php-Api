<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait TPasswordTrait
{
    /**
     * Задать пароль к маркеру временного доступа
     * @param string $password Пароль к маркеру временного доступа
     * @return $this
     */
    final public function password(string $password): static
    {
        $this->setOptions('-tpassword ' . $password);
        return $this;
    }
}