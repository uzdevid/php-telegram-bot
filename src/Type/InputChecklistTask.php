<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputChecklistTask
 *
 * @link https://core.telegram.org/bots/api#inputchecklisttask
 *
 * Describes a task to add to a checklist.
 */
class InputChecklistTask extends Type {
    /**
     * @var int Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
     */
    public int $id;

    /**
     * @var string Text of the task; 1-100 characters after entities parsing
     */
    public string $text;

    /**
     * @var string|null Optional. Mode for parsing entities in the text. See formatting options for more details.
     */
    public string|null $parseMode;

    /**
     * @var MessageEntity[]|null Optional. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
     */
    public array|null $textEntities;
}
