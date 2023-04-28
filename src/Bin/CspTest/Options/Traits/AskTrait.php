<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait AskTrait
{

    /**
     * @return $this
     */
    public function ask(): static
    {
        $this->setOptions('-ask');
        return $this;
    }
}