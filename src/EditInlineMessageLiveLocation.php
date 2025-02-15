<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the content of a live location in an inline message sent via a bot; for bots only
 */
class EditInlineMessageLiveLocation extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageLiveLocation';

    /**
     * Inline message identifier
     *
     * @var string
     */
    protected string $inlineMessageId;

    /**
     * The new message reply markup; pass null if none
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New location content of the message; pass null to stop sharing the live location
     *
     * @var Location
     */
    protected Location $location;

    /**
     * The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown
     *
     * @var int
     */
    protected int $heading;

    /**
     * The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled
     *
     * @var int
     */
    protected int $proximityAlertRadius;

    public function __construct(
        string $inlineMessageId,
        ReplyMarkup $replyMarkup,
        Location $location,
        int $heading,
        int $proximityAlertRadius
    ) {
        $this->inlineMessageId = $inlineMessageId;
        $this->replyMarkup = $replyMarkup;
        $this->location = $location;
        $this->heading = $heading;
        $this->proximityAlertRadius = $proximityAlertRadius;
    }

    public static function fromArray(array $array): EditInlineMessageLiveLocation
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['location']),
            $array['heading'],
            $array['proximity_alert_radius'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'location' => $this->location->typeSerialize(),
            'heading' => $this->heading,
            'proximity_alert_radius' => $this->proximityAlertRadius,
        ];
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getHeading(): int
    {
        return $this->heading;
    }

    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }
}
