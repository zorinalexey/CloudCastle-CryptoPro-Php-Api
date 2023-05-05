<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait SilentTrait
{

    /**
     * Не интерактивный режим.
     * Возвращает ошибку в случае, если под заданные параметры подходит более одного сертификата (CRL),
     * в таком случае требуется указать более строгие критерии поиска.
     * @return $this
     */
    final public function silent(): self
    {
        $this->setOptions('-silent');
        return $this;
    }
}