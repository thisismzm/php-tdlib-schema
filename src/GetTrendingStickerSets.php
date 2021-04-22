<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of trending sticker sets. For the optimal performance the number of returned sticker sets is chosen by the library
 */
class GetTrendingStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getTrendingStickerSets';

    /**
     * The offset from which to return the sticker sets; must be non-negative
     *
     * @var int
     */
    protected int $offset;

    /**
     * The maximum number of sticker sets to be returned; must be non-negative. Fewer sticker sets may be returned than specified by the limit, even if the end of the list has not been reached
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $offset, int $limit)
    {
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetTrendingStickerSets
    {
        return new static(
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
