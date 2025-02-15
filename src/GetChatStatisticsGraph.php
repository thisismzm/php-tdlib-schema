<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Loads asynchronous or zoomed in chat statistics graph.
 */
class GetChatStatisticsGraph extends TdFunction
{
    public const TYPE_NAME = 'getChatStatisticsGraph';

    /**
     * Chat identifer.
     */
    protected int $chatId;

    /**
     * The token for graph loading.
     */
    protected string $token;

    /**
     * X-value for zoomed in graph or 0 otherwise.
     */
    protected int $x;

    public function __construct(int $chatId, string $token, int $x)
    {
        $this->chatId = $chatId;
        $this->token  = $token;
        $this->x      = $x;
    }

    public static function fromArray(array $array): GetChatStatisticsGraph
    {
        return new static(
            $array['chat_id'],
            $array['token'],
            $array['x'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'token'   => $this->token,
            'x'       => $this->x,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getX(): int
    {
        return $this->x;
    }
}
