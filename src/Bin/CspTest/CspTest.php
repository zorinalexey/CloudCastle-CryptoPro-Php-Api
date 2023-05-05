<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest;

use CloudCastle\CryptoProPhpApi\Bin\Bin;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertLicOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOption;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions;
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
        $opt = new LowEncOptions();
        $this->setCommand('-lowenc');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * Тест шифрования/дешифрования сообщений на упрощенном уровне
     * @return LowEncOptions
     */
    public function sfenc(): LowEncOptions
    {
        $opt = new LowEncOptions();
        $this->setCommand('-sfenc');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * Низкоуровневый тест подписи сообщений
     * Вместо этого используйте '-lowsign -repeat NN'!
     * @return LowSignOption
     */
    public function lowSign(): LowSignOption
    {
        $opt = new LowSignOption();
        $this->setCommand('-lowsign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * Упрощенный тест подписи/проверки сообщений
     * @return SfSignOptions
     */
    public function sfSign(): SfSignOptions
    {
        $opt = new SfSignOptions();
        $this->setCommand('-sfsign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    public function ipSec(): IpSecOptions
    {
        $opt = new IpSecOptions();
        $this->setCommand('-ipsec');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return DefaultProviderOptions
     */
    public function defProv(): DefaultProviderOptions
    {
        $opt = new DefaultProviderOptions();
        $this->setCommand('-defprov');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return PropertyOptions
     */
    public function property(): PropertyOptions
    {
        $opt = new PropertyOptions();
        $this->setCommand('-property');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return HashOptions
     */
    public function hash(): HashOptions
    {
        $opt = new HashOptions();
        $this->setCommand('-hash');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    public function certKey(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-certkey');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return AbsorbOptions
     */
    public function absorb(): AbsorbOptions
    {
        $opt = new AbsorbOptions();
        $this->setCommand('-absorb');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return IpSecOptions
     */
    public function tlss(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-tlss');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return IpSecOptions
     */
    public function tlsc(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-tlsc');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return CertLicOptions
     */
    public function certLic(): CertLicOptions
    {
        $opt = new CertLicOptions();
        $this->setCommand('-certlic');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return RcOptions
     */
    public function rc(): RcOptions
    {
        $opt = new RcOptions();
        $this->setCommand('-rc');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return MiniCaOptions
     */
    public function miniCa(): MiniCaOptions
    {
        $opt = new MiniCaOptions();
        $this->setCommand('-minica');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return IpSecOptions
     */
    public function oid(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-oid');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return IpSecOptions
     */
    public function password(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-passwd');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return IpSecOptions
     */
    public function keyCopy(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-keycopy');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    public function keySet(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-keyset');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    public function card(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-card');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    public function enum(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-enum');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    public function perf(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-perf');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    public function speed(): IpSecOptions
    {
        $opt = new \stdClass();
        $this->setCommand('-speed');
        $this->setOptions($opt);
        return $opt;
    }
}