<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns messages in a chat. The messages are returned in a reverse chronological order (i.e., in order of decreasing message_id). For optimal performance the number of returned messages is chosen by the library. This is an offline request if only_local is true.
 */
class GetChatHistory extends TdFunction
{
    public const TYPE_NAME = 'getChatHistory';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
     */
    protected int $fromMessageId;

    /**
     * Specify 0 to get results from exactly the from_message_id or a negative offset up to 99 to get additionally some newer messages.
     */
    protected int $offset;

    /**
     * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset. Fewer messages may be returned than specified by the limit, even if the end of the message history has not been reached.
     */
    protected int $limit;

    /**
     * If true, returns only messages that are available locally without sending network requests.
     */
    protected bool $onlyLocal;

    public function __construct(int $chatId, int $fromMessageId, int $offset, int $limit, bool $onlyLocal)
    {
        $this->chatId        = $chatId;
        $this->fromMessageId = $fromMessageId;
        $this->offset        = $offset;
        $this->limit         = $limit;
        $this->onlyLocal     = $onlyLocal;
    }

    public static function fromArray(array $array): GetChatHistory
    {
        return new static(
            $array['chat_id'],
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
            $array['only_local'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'from_message_id' => $this->fromMessageId,
            'offset'          => $this->offset,
            'limit'           => $this->limit,
            'only_local'      => $this->onlyLocal,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }
}
