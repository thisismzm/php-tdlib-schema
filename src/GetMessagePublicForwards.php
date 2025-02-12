<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns forwarded copies of a channel message to different public channels. For optimal performance, the number of returned messages is chosen by TDLib
 */
class GetMessagePublicForwards extends TdFunction
{
    public const TYPE_NAME = 'getMessagePublicForwards';

    /**
     * Chat identifier of the message
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Offset of the first entry to return as received from the previous request; use empty string to get first chunk of results
     *
     * @var string
     */
    protected string $offset;

    /**
     * The maximum number of messages to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $chatId, int $messageId, string $offset, int $limit)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetMessagePublicForwards
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
