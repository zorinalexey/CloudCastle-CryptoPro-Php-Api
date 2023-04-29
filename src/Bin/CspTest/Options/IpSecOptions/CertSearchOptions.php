<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThumbprintTrait;

class CertSearchOptions extends Options
{
    use DnTrait, ThumbprintTrait;
}