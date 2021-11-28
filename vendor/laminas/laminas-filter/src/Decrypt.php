<?php

namespace Laminas\Filter;

/**
 * Decrypts a given string
 */
class Decrypt extends Encrypt
{
    /**
     * Defined by Laminas\Filter\Filter
     *
     * Decrypts the content $value with the defined settings
     *
     * @param  string $value Content to decrypt
     * @return string The decrypted content
     */
    public function filter($value)
    {
        if (! is_string($value)) {
            return $value;
        }

        return $this->adapter->decrypt($value);
    }
}
