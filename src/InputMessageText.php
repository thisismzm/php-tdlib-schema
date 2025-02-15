<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A text message
 */
class InputMessageText extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageText';

    /**
     * Formatted text to be sent; 1-GetOption("message_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Code, Pre, PreCode, TextUrl and MentionName entities are allowed to be specified manually
     *
     * @var FormattedText
     */
    protected FormattedText $text;

    /**
     * True, if rich web page previews for URLs in the message text must be disabled
     *
     * @var bool
     */
    protected bool $disableWebPagePreview;

    /**
     * True, if a chat message draft must be deleted
     *
     * @var bool
     */
    protected bool $clearDraft;

    public function __construct(FormattedText $text, bool $disableWebPagePreview, bool $clearDraft)
    {
        parent::__construct();

        $this->text = $text;
        $this->disableWebPagePreview = $disableWebPagePreview;
        $this->clearDraft = $clearDraft;
    }

    public static function fromArray(array $array): InputMessageText
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['disable_web_page_preview'],
            $array['clear_draft'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
            'disable_web_page_preview' => $this->disableWebPagePreview,
            'clear_draft' => $this->clearDraft,
        ];
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getDisableWebPagePreview(): bool
    {
        return $this->disableWebPagePreview;
    }

    public function getClearDraft(): bool
    {
        return $this->clearDraft;
    }
}
