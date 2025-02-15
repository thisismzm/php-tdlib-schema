<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A PNG or TGV (gzipped subset of SVG with MIME type "application/x-tgwallpattern") pattern to be combined with the background fill chosen by the user
 */
class BackgroundTypePattern extends BackgroundType
{
    public const TYPE_NAME = 'backgroundTypePattern';

    /**
     * Fill of the background
     *
     * @var BackgroundFill
     */
    protected BackgroundFill $fill;

    /**
     * Intensity of the pattern when it is shown above the filled background; 0-100.
     *
     * @var int
     */
    protected int $intensity;

    /**
     * True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
     *
     * @var bool
     */
    protected bool $isInverted;

    /**
     * True, if the background needs to be slightly moved when device is tilted
     *
     * @var bool
     */
    protected bool $isMoving;

    public function __construct(BackgroundFill $fill, int $intensity, bool $isInverted, bool $isMoving)
    {
        parent::__construct();

        $this->fill = $fill;
        $this->intensity = $intensity;
        $this->isInverted = $isInverted;
        $this->isMoving = $isMoving;
    }

    public static function fromArray(array $array): BackgroundTypePattern
    {
        return new static(
            TdSchemaRegistry::fromArray($array['fill']),
            $array['intensity'],
            $array['is_inverted'],
            $array['is_moving'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'fill' => $this->fill->typeSerialize(),
            'intensity' => $this->intensity,
            'is_inverted' => $this->isInverted,
            'is_moving' => $this->isMoving,
        ];
    }

    public function getFill(): BackgroundFill
    {
        return $this->fill;
    }

    public function getIntensity(): int
    {
        return $this->intensity;
    }

    public function getIsInverted(): bool
    {
        return $this->isInverted;
    }

    public function getIsMoving(): bool
    {
        return $this->isMoving;
    }
}
