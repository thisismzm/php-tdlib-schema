<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message was originally sent on behalf of a chat
 */
class MessageForwardOriginChat extends MessageForwardOrigin
{
    public const TYPE_NAME = 'messageForwardOriginChat';

    /**
     * Identifier of the chat that originally sent the message
     *
     * @var int
     */
    protected int $senderChatId;

    /**
     * For messages originally sent by an anonymous chat administrator, original message author signature
     *
     * @var string
     */
    protected string $authorSignature;

    public function __construct(int $senderChatId, string $authorSignature)
    {
        parent::__construct();

        $this->senderChatId = $senderChatId;
        $this->authorSignature = $authorSignature;
    }

    public static function fromArray(array $array): MessageForwardOriginChat
    {
        return new static(
            $array['sender_chat_id'],
            $array['author_signature'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender_chat_id' => $this->senderChatId,
            'author_signature' => $this->authorSignature,
        ];
    }

    public function getSenderChatId(): int
    {
        return $this->senderChatId;
    }

    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }
}
