<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A poll in a message was stopped
 */
class ChatEventPollStopped extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventPollStopped';

    /**
     * The message with the poll
     *
     * @var Message
     */
    protected Message $message;

    public function __construct(Message $message)
    {
        parent::__construct();

        $this->message = $message;
    }

    public static function fromArray(array $array): ChatEventPollStopped
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
        ];
    }

    public function getMessage(): Message
    {
        return $this->message;
    }
}
