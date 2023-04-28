<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait EncryptionAlgTrait
{

    /**
     * Алгоритм шифрования
     * @return $this
     */
    final public function encryptionalg(string $alg): static
    {
        $this->setOptions('-encryptionalg ' . $alg);
        return $this;
    }
}