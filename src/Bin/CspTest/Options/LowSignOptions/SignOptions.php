<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\Base64Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\AddTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AskTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\CadesDisableTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\CadesNoSearchTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\CadesStrictTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\DetachedTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\InputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\LocalStoreTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\OutputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\PasswordTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\RepeatTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\SigCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\SignatureTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\SigTimeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\UserStoreTrait;

class SignOptions extends Options
{
    use InputFileTrait, OutputFileTrait, UserStoreTrait, LocalStoreTrait, PasswordTrait, DetachedTrait, Base64Trait;
    use AddTrait, SignatureTrait, AlgTrait, AskTrait, CadesStrictTrait, CadesDisableTrait, CadesNoSearchTrait;
    use SigCertTrait, SigTimeTrait, RepeatTrait, SilentTrait;
}