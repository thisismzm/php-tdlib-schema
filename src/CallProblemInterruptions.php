<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The other side kept disappearing
 */
class CallProblemInterruptions extends CallProblem
{
    public const TYPE_NAME = 'callProblemInterruptions';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallProblemInterruptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
