<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ContainerTrait
{

    /**
     * Указать имя контейнера с сертификатом или закрытым ключом. Имя имеет формат вида \\.\reader\name.
     * Если опция -file не была указана, закрытый ключ и сертификат будут взяты
     * из указанного контейнера. Контейнер может быть указан в виде строки 'skip', в таком случае в
     * сертификате не будет создана ссылка на закрытый ключ.
     * @param string $container
     * @return $this
     */
    final public function container(string $container): static
    {
        $this->setOptions('-container "' . $container . '"');
        return $this;
    }
}