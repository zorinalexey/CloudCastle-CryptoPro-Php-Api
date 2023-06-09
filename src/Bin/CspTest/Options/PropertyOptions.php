<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\PropertyCommandOptions;

/**
 *
 */
final class PropertyOptions extends Options
{

    /**
     * @return PropertyCommandOptions
     */
    public function make(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-make');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return PropertyCommandOptions
     */
    public function delete(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-delete');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return PropertyCommandOptions
     */
    public function install(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-install');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return PropertyCommandOptions
     */
    public function certInstall(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-cinstall');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return PropertyCommandOptions
     */
    public function setCert(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-setcert');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return PropertyCommandOptions
     */
    public function sign(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-sign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return PropertyCommandOptions
     */
    public function shadowThumbpint(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-shadowthumbpint');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @return PropertyCommandOptions
     */
    public function linkedThumbprint(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-linkedthumbprint');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string $password
     * @return PropertyCommandOptions
     */
    public function pin(string $password): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-pin ' . $password);
        $this->setOptions($opt);
        return $opt;
    }
}