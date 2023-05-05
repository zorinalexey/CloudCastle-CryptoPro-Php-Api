<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait LengthTrait
{

    /**
     * @param int $lengthBits
     * @return $this
     */
    final public function length(int $lengthBits): self
    {
        $this->setOptions('-length ' . $lengthBits);
        return $this;
    }
}