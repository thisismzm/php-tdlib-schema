<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Applies if a user enters new credentials using Android Pay.
 */
class InputCredentialsAndroidPay extends InputCredentials
{
    public const TYPE_NAME = 'inputCredentialsAndroidPay';

    /**
     * JSON-encoded data with the credential identifier.
     */
    protected string $data;

    public function __construct(string $data)
    {
        parent::__construct();

        $this->data = $data;
    }

    public static function fromArray(array $array): InputCredentialsAndroidPay
    {
        return new static(
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }

    public function getData(): string
    {
        return $this->data;
    }
}
