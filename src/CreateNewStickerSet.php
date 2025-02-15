<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a new sticker set. Returns the newly created sticker set
 */
class CreateNewStickerSet extends TdFunction
{
    public const TYPE_NAME = 'createNewStickerSet';

    /**
     * Sticker set owner; ignored for regular users
     *
     * @var int
     */
    protected int $userId;

    /**
     * Sticker set title; 1-64 characters
     *
     * @var string
     */
    protected string $title;

    /**
     * Sticker set name. Can contain only English letters, digits and underscores. Must end with *"_by_<bot username>"* (*<bot_username>* is case insensitive) for bots; 1-64 characters
     *
     * @var string
     */
    protected string $name;

    /**
     * True, if stickers are masks. Animated stickers can't be masks
     *
     * @var bool
     */
    protected bool $isMasks;

    /**
     * List of stickers to be added to the set; must be non-empty. All stickers must be of the same type. For animated stickers, uploadStickerFile must be used before the sticker is shown
     *
     * @var InputSticker[]
     */
    protected array $stickers;

    /**
     * Source of the sticker set; may be empty if unknown
     *
     * @var string
     */
    protected string $source;

    public function __construct(
        int $userId,
        string $title,
        string $name,
        bool $isMasks,
        array $stickers,
        string $source
    ) {
        $this->userId = $userId;
        $this->title = $title;
        $this->name = $name;
        $this->isMasks = $isMasks;
        $this->stickers = $stickers;
        $this->source = $source;
    }

    public static function fromArray(array $array): CreateNewStickerSet
    {
        return new static(
            $array['user_id'],
            $array['title'],
            $array['name'],
            $array['is_masks'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
            $array['source'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'title' => $this->title,
            'name' => $this->name,
            'is_masks' => $this->isMasks,
            array_map(fn($x) => $x->typeSerialize(), $this->stickers),
            'source' => $this->source,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIsMasks(): bool
    {
        return $this->isMasks;
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getSource(): string
    {
        return $this->source;
    }
}
