<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Informs TDLib that messages are being viewed by the user. Sponsored messages must be marked as viewed only when the entire text of the message is shown on the screen (excluding the button). Many useful activities depend on whether the messages are currently being viewed or not (e.g., marking messages as read, incrementing a view counter, updating a view counter, removing deleted messages in supergroups and channels)
 */
class ViewMessages extends TdFunction
{
    public const TYPE_NAME = 'viewMessages';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the messages are being viewed
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * The identifiers of the messages being viewed
     *
     * @var int[]
     */
    protected array $messageIds;

    /**
     * True, if messages in closed chats must be marked as read by the request
     *
     * @var bool
     */
    protected bool $forceRead;

    public function __construct(int $chatId, int $messageThreadId, array $messageIds, bool $forceRead)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->messageIds = $messageIds;
        $this->forceRead = $forceRead;
    }

    public static function fromArray(array $array): ViewMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['message_ids'],
            $array['force_read'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'message_ids' => $this->messageIds,
            'force_read' => $this->forceRead,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getForceRead(): bool
    {
        return $this->forceRead;
    }
}
