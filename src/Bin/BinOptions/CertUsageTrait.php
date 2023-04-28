<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CertUsageTrait
{
    /**
     * Задать назначения сертификата <OID>
     * @param string $usage Назначение сертификата
     * @return $this
     */
    final public function certUsage(string $usage): static
    {
        $this->setOptions($usage, '-certusage', ',');
        return $this;
    }
}