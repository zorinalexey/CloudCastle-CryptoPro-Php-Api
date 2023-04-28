<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait CmsModeTrait
{

    final public function cmsMode(string $mode): static
    {
        $this->setOptions('-cmsmode "' . $mode . '"');
        return $this;
    }
}