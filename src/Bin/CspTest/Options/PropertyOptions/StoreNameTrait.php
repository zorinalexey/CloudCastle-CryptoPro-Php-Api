<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;

trait StoreNameTrait
{

    /**
     * @param string $fileName
     * @return $this
     */
    final public function storeName(string $fileName): static
    {
        $this->setOptions('-storename "' . $fileName . '"');
        return $this;
    }
}