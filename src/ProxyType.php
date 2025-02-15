<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the type of a proxy server
 */
class ProxyType extends TdObject
{
    public const TYPE_NAME = 'ProxyType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ProxyType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
