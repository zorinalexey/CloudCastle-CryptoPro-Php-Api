<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig;

use CloudCastle\CryptoProPhpApi\Bin\Bin;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\DefProvOptions;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\HardWareOptions;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\LicenseOptions;

final class CpConfig extends Bin
{

    private static string $bin = self::APP_SBIN_PATH . DIRECTORY_SEPARATOR . 'cpconfig' . self::APP_EXT;

    public function __construct()
    {
        $this->setCommand(self::$bin);
    }

    /**
     * Работа с лицензией
     * Без дополнительных опций вернет текущее значение лицензии
     * @return LicenseOptions
     */
    public function license(): LicenseOptions
    {
        $this->setCommand('-license');
        $this->setOptions(new LicenseOptions());
        return $this->getOptions();
    }

    /**
     * Настройка оборудования СКЗИ
     * @return HardWareOptions
     */
    public function hardware(): HardWareOptions
    {
        $this->setCommand('-hardware');
        $this->setOptions(new HardWareOptions());
        return $this->getOptions();
    }

    /**
     * Настройка крипто-провайдера по умолчанию
     * @return DefProvOptions
     */
    public function defProv(): DefProvOptions
    {
        $this->setCommand('-defprov');
        $this->setOptions(new DefProvOptions());
        return $this->getOptions();
    }
}