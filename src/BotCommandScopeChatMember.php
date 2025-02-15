<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A scope covering a member of a chat
 */
class BotCommandScopeChatMember extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeChatMember';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $chatId, int $userId)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->userId = $userId;
    }

    public static function fromArray(array $array): BotCommandScopeChatMember
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
