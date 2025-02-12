<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Information about the authentication code that was sent
 */
class AuthenticationCodeInfo extends TdObject
{
    public const TYPE_NAME = 'authenticationCodeInfo';

    /**
     * A phone number that is being authenticated
     *
     * @var string
     */
    protected string $phoneNumber;

    /**
     * The way the code was sent to the user
     *
     * @var AuthenticationCodeType
     */
    protected AuthenticationCodeType $type;

    /**
     * The way the next code will be sent to the user; may be null
     *
     * @var AuthenticationCodeType|null
     */
    protected ?AuthenticationCodeType $nextType;

    /**
     * Timeout before the code can be re-sent, in seconds
     *
     * @var int
     */
    protected int $timeout;

    public function __construct(
        string $phoneNumber,
        AuthenticationCodeType $type,
        ?AuthenticationCodeType $nextType,
        int $timeout
    ) {
        $this->phoneNumber = $phoneNumber;
        $this->type = $type;
        $this->nextType = $nextType;
        $this->timeout = $timeout;
    }

    public static function fromArray(array $array): AuthenticationCodeInfo
    {
        return new static(
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['type']),
            (isset($array['next_type']) ? TdSchemaRegistry::fromArray($array['next_type']) : null),
            $array['timeout'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'type' => $this->type->typeSerialize(),
            'next_type' => (isset($this->nextType) ? $this->nextType : null),
            'timeout' => $this->timeout,
        ];
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getType(): AuthenticationCodeType
    {
        return $this->type;
    }

    public function getNextType(): ?AuthenticationCodeType
    {
        return $this->nextType;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }
}
