<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AttrTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AuthAttrTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesBesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesTsaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CrlTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FextTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\HashAlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoStampCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SignTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StampChainCheckTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\XLongType1Trait;

class AddSignOptions extends Options
{
    use SignTypeTrait, KpsOptions, CertTrait, CrlTrait, NoStampCertTrait, StampChainCheckTrait, XLongType1Trait;
    use CadestTrait, CadesBesTrait, CadesTsaTrait, HashAlgTrait, PinTrait, AuthAttrTrait, AttrTrait, FextTrait;

    /**
     * Указать файл сообщения для подписания
     * @param string $inputFile Файл, содержащий исходные данные
     * @param string $outputFile Файл, который будет содержать созданное сообщение
     * @return void
     */
    final public function file(string $inputFile, string $outputFile): void
    {
        $this->setOptions('"' . $inputFile . '" "' . $outputFile . '" ');
    }
}