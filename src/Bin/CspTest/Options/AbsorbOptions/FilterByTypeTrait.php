<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;

trait FilterByTypeTrait
{

    /**
     * @return $this
     */
    final  public function filterByType(): self
    {
        $this->setOptions('-filterbytype');
        return $this;
    }
}