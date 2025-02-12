<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a call
 */
class Call extends TdObject
{
    public const TYPE_NAME = 'call';

    /**
     * Call identifier, not persistent
     *
     * @var int
     */
    protected int $id;

    /**
     * Peer user identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * True, if the call is outgoing
     *
     * @var bool
     */
    protected bool $isOutgoing;

    /**
     * True, if the call is a video call
     *
     * @var bool
     */
    protected bool $isVideo;

    /**
     * Call state
     *
     * @var CallState
     */
    protected CallState $state;

    public function __construct(int $id, int $userId, bool $isOutgoing, bool $isVideo, CallState $state)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->isOutgoing = $isOutgoing;
        $this->isVideo = $isVideo;
        $this->state = $state;
    }

    public static function fromArray(array $array): Call
    {
        return new static(
            $array['id'],
            $array['user_id'],
            $array['is_outgoing'],
            $array['is_video'],
            TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'user_id' => $this->userId,
            'is_outgoing' => $this->isOutgoing,
            'is_video' => $this->isVideo,
            'state' => $this->state->typeSerialize(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function getState(): CallState
    {
        return $this->state;
    }
}
