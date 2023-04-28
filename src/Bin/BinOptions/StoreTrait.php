<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait StoreTrait
{

    /**
     * Имя хранилища.
     * @param string|null $type Тип хранилища:
     *  user - хранилище пользователя (по умолчанию)
     *  во всех других случаях - хранилище машины
     * @param string|null $store
     * @return $this
     */
    final public function store(string|null $type = null, string|null $store = null): static
    {
        $type ??= 'u';
        $store = ucfirst($store);
        $stores = [
            'My',
            'Root',
            'CA',
            'Cache',
            'AddressBook'
        ];
        if ($type !== 'user') {
            $type = 'm';
        }
        if (!in_array($store, $stores)) {
            $store = $type . 'My';
        }
        $this->setOptions('-store ' . $store);
        return $this;
    }

}