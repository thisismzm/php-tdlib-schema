<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is picking a sticker to send
 */
class ChatActionChoosingSticker extends ChatAction
{
    public const TYPE_NAME = 'chatActionChoosingSticker';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionChoosingSticker
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
