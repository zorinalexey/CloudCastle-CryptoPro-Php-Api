<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest;

use CloudCastle\CryptoProPhpApi\Bin\Bin;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOption;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions;

final class CspTest extends Bin
{
    private static string $bin = self::APP_BIN_PATH . DIRECTORY_SEPARATOR . 'csptest' . self::APP_EXT;

    public function __construct()
    {
        $this->setCommand(self::$bin);
    }

    /**
     * Тест низкоуровневого шифрования/дешифрования
     * @return LowEncOptions
     */
    public function lowEnc(): LowEncOptions
    {
        $this->setCommand('-lowenc');
        $this->setOptions(new LowEncOptions());
        return $this->getOptions();
    }

    /**
     * Тест шифрования/дешифрования сообщений на упрощенном уровне
     * @return LowEncOptions
     */
    public function sfenc(): LowEncOptions
    {
        $this->setCommand('-sfenc');
        $this->setOptions(new LowEncOptions());
        return $this->getOptions();
    }

    /**
     * Низкоуровневый тест подписи сообщений
     * Вместо этого используйте '-lowsign -repeat NN'!
     * @return LowSignOption
     */
    public function lowSign(): LowSignOption
    {
        $this->setCommand('-lowsign');
        $this->setOptions(new LowSignOption());
        return $this->getOptions();
    }

    /**
     * Упрощенный тест подписи/проверки сообщений
     * @return SfSignOptions
     */
    public function sfSign():SfSignOptions
    {
        $this->setCommand('-sfsign');
        $this->setOptions(new SfSignOptions());
        return $this->getOptions();
    }


}