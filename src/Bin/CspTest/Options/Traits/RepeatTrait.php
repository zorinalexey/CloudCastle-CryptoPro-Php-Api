<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait RepeatTrait
{

    /**
     * @param int $count
     * @return $this
     */
    final public function repeat(int $count):static
    {
        $this->setOptions('-repeat '.$count);
        return $this;
    }
}