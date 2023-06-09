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
     * @param bool $mStore
     * @return $this
     */
    final public function store(string|null $type = null, string|null $store = null, bool $mStore = false): self
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
        if ($type !== 'user' && $type !== 'u') {
            $type = 'm';
        }
        if (!in_array($store, $stores)) {
            $store = $type . 'My';
        }
        if (!$mStore) {
            $this->setOptions('-store ' . $store);
        } else {
            $this->setOptions('-Store ' . $store);
        }
        return $this;
    }

}