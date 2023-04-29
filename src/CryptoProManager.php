<?php

namespace CloudCastle\CryptoProPhpApi;

use CloudCastle\CryptoProPhpApi\Abstracts\Bin;
use CloudCastle\CryptoProPhpApi\Bin\CertMgr\CertMgr;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\CpConfig;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\CryptCp;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\CspTest;

final class CryptoProManager
{

    private CertMgr|null $certmgr = null;
    private CryptCp|null $cryptcp = null;
    private CpConfig|null $cpconfig = null;
    private CspTest|null $cspTest = null;

    private Bin|null $command = null;

    private string|null $user = null;

    public function __construct()
    {
        $this->certmgr = new CertMgr();
        $this->cryptcp = new CryptCp();
        $this->cpconfig = new CpConfig();
        $this->cspTest = new CspTest();
    }

    /**
     * Выполнить команду от имени пользователя $userName
     * Для того, чтобы выполнить команду от имени другого пользователя,
     * необходимо добавить текущего пользователя в группу sudo.
     * Так же у пользователя $userName должна быть активная лицензия Крипто-про
     * @param string $userName
     * @return $this
     */
    public function user(string $userName): self
    {
        $this->user .= 'sudo -u ' . $userName;
        return $this;
    }

    /**
     * Утилита командной строки для управления сертификатами, списками отзыва сертификатов (CRL) и хранилищами.
     * @return CertMgr
     */
    public function certMgr(): CertMgr
    {
        $this->command = $this->certmgr;
        return $this->command;
    }

    /**
     * @return CspTest
     */
    public function cspTest(): CspTest
    {
        $this->command = $this->cspTest;
        return $this->command;
    }

    /**
     * Подпись и шифрование файлов
     * @return CryptCp
     */
    public function cryptCp(): CryptCp
    {
        $this->command = $this->cryptcp;
        return $this->command;
    }

    /**
     * Настройка СКЗИ
     * @return CpConfig
     */
    public function cpConfig(): CpConfig
    {
        $this->command = $this->cpconfig;
        return $this->command;
    }

    /**
     * Выполнить команду и вернуть результат
     * @param callable|array|null $callBack
     * @return array|callable|null
     */
    public function exec(callable|array|null $callBack = null): mixed
    {
        $command = $this->command;
        if ($this->user) {
            $command = $this->user . ' ' . $this->command;
        }
        exec($command, $output, $code);
        if (is_callable($callBack)) {
            return $callBack($output, $code);
        }
        if (is_array($callBack)) {
            return call_user_func_array($callBack, compact('output', 'code'));
        }
        if (!$code) {
            return compact('output', 'code');
        }
        return null;
    }

    final public function __toString(): string
    {
        $command = $this->command;
        if ($this->user) {
            $command = $this->user . ' ' . $this->command;
        }
        return $command;
    }
}