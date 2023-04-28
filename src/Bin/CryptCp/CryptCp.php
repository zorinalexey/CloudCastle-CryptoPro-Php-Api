<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp;

use CloudCastle\CryptoProPhpApi\Bin\Bin;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CheckRegOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddAttrOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateUserOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DecryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListDnOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

final class CryptCp extends Bin
{
    private static string $bin = self::APP_BIN_PATH . DIRECTORY_SEPARATOR . 'cryptcp' . self::APP_EXT;

    public function __construct()
    {
        $this->setCommand(self::$bin);
    }

    /**
     * Зашифровать данные и создать сообщение
     * @return EncryptOptions
     */
    public function encrypt(): EncryptOptions
    {
        $this->setCommand('-encr');
        $this->setOptions(new EncryptOptions());
        return $this->getOptions();
    }

    /**
     * Расшифровать данные из сообщения
     * @return DecryptOptions
     */
    public function decrypt(): DecryptOptions
    {
        $this->setCommand('-decr');
        $this->setOptions(new DecryptOptions());
        return $this->getOptions();
    }

    /**
     * Произвести хеширование содержимого файлов и записать результат в «имя_исходного_файла.hsh»
     * @return HashOptions
     */
    public function hash(): HashOptions
    {
        $this->setCommand('-hash');
        $this->setOptions(new HashOptions());
        return $this->getOptions();
    }

    /**
     * Проверить значение хэша файла
     * @return HashOptions
     */
    public function vHash(): HashOptions
    {
        $this->setCommand('-vhash');
        $this->setOptions(new HashOptions());
        return $this->getOptions();
    }

    /**
     * Создание подписи для файла
     * @return SignfOptions
     */
    public function signF(): SignfOptions
    {
        $this->setCommand('-signf');
        $this->setOptions(new SignfOptions());
        return $this->getOptions();
    }

    /**
     * Проверка подписи файла
     * @return VSignOptions
     */
    public function vSignF(): VSignOptions
    {
        $this->setCommand('-vsignf');
        $this->setOptions(new VSignOptions());
        return $this->getOptions();
    }

    /**
     * Добавление подписи в файл
     * @return AddSignfOptions
     */
    public function addSignF(): AddSignfOptions
    {
        $this->setCommand('-addsignf');
        $this->setOptions(new AddSignfOptions());
        return $this->getOptions();
    }

    /**
     * Создание подписанного сообщения
     * @return SignOptions
     */
    public function sign(): SignOptions
    {
        $this->setCommand('-sign');
        $this->setOptions(new SignOptions());
        return $this->getOptions();
    }

    /**
     * Добавление подписи в сообщение
     * @return AddSignOptions
     */
    public function addSign(): AddSignOptions
    {
        $this->setCommand('-addsign');
        $this->setOptions(new AddSignOptions());
        return $this->getOptions();
    }

    /**
     * Удаление подписи из сообщения
     * @return DelSignOptions
     */
    public function delSign(): DelSignOptions
    {
        $this->setCommand('-delsign');
        $this->setOptions(new DelSignOptions());
        return $this->getOptions();
    }

    /**
     * Проверка подписи
     * @return VerifyOptions
     */
    public function verify(): VerifyOptions
    {
        $this->setCommand('-verify');
        $this->setOptions(new VerifyOptions());
        return $this->getOptions();
    }

    /**
     * Проверка подписи
     * @return AddAttrOptions
     */
    public function addAttr(): AddAttrOptions
    {
        $this->setCommand('-addattr');
        $this->setOptions(new AddAttrOptions());
        return $this->getOptions();
    }

    /**
     * Копирование сертификата в хранилище
     * @return CopyCertOptions
     */
    public function copyCert(): CopyCertOptions
    {
        $this->setCommand('-copycert');
        $this->setOptions(new CopyCertOptions());
        return $this->getOptions();
    }

    /**
     * Копирование сертификата из ключевого контейнера в хранилище
     * @return CspCertOptions
     */
    public function cspCert(): CspCertOptions
    {
        $this->setCommand('-cspcert');
        $this->setOptions(new CspCertOptions());
        return $this->getOptions();
    }

    /**
     * Удаление сертификата из хранилища локальной машины
     * @return DelCertOptions
     */
    public function delCert(): DelCertOptions
    {
        $this->setCommand('-delcert');
        $this->setOptions(new DelCertOptions());
        return $this->getOptions();
    }

    /**
     * Создание и сохранение запроса сертификата
     * @return CreateRequestOptions
     */
    public function createRequest(): CreateRequestOptions
    {
        $this->setCommand('-createrqst');
        $this->setOptions(new CreateRequestOptions());
        return $this->getOptions();
    }

    /**
     * Установка сертификата из файла
     * @return InstCertOptions
     */
    public function instCert(): InstCertOptions
    {
        $this->setCommand('-instcert');
        $this->setOptions(new InstCertOptions());
        return $this->getOptions();
    }

    /**
     * Просмотр настроек учетных записей пользователей УЦ
     * @return ListDnOptions
     */
    public function listDn(): ListDnOptions
    {
        $this->setCommand('-listdn');
        $this->setOptions(new ListDnOptions());
        return $this->getOptions();
    }

    /**
     * Регистрация пользователя на УЦ
     * @return CreateUserOptions
     */
    public function createUser(): CreateUserOptions
    {
        $this->setCommand('-createuser');
        $this->setOptions(new CreateUserOptions());
        return $this->getOptions();
    }

    /**
     * Проверка регистрации пользователя на УЦ
     * @return CheckRegOptions
     */
    public function checkReg(): CheckRegOptions
    {
        $this->setCommand('-checkreg');
        $this->setOptions(new CheckRegOptions());
        return $this->getOptions();
    }

    /**
     * Просмотр списка шаблонов сертификатов, доступных пользователю УЦ
     * @return ListTmplOptions
     */
    public function listTmpl(): ListTmplOptions
    {
        $this->setCommand('-listtmpl');
        $this->setOptions(new ListTmplOptions());
        return $this->getOptions();
    }

    /**
     * Создание запроса, получение и установка сертификата
     * @return CreateCertOptions
     */
    public function createCert(): CreateCertOptions
    {
        $this->setCommand('-createcert');
        $this->setOptions(new CreateCertOptions());
        return $this->getOptions();
    }

    /**
     * Проверка выпуска сертификата, получение и установка сертификата
     * @return PendCertOptions
     */
    public function pendCert(): PendCertOptions
    {
        $this->setCommand('-pendcert');
        $this->setOptions(new PendCertOptions());
        return $this->getOptions();
    }


}