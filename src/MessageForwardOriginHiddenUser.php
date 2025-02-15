<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message was originally sent by a user, which is hidden by their privacy settings
 */
class MessageForwardOriginHiddenUser extends MessageForwardOrigin
{
    public const TYPE_NAME = 'messageForwardOriginHiddenUser';

    /**
     * Name of the sender
     *
     * @var string
     */
    protected string $senderName;

    public function __construct(string $senderName)
    {
        parent::__construct();

        $this->senderName = $senderName;
    }

    public static function fromArray(array $array): MessageForwardOriginHiddenUser
    {
        return new static(
            $array['sender_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender_name' => $this->senderName,
        ];
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }
}
