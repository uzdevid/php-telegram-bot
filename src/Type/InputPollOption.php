<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputPollOption
 *
 * @link https://core.telegram.org/bots/api#inputpolloption
 *
 * This object contains information about one answer option in a poll to be sent.
 */
class InputPollOption extends Type {
    /**
     * @var string Option text, 1-100 characters
     */
    public string $text;

    /**
     * @var string|null Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed
     */
    public string|null $textParseMode;

    /**
     * @var MessageEntity[]|null Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
     */
    public array|null $textEntities;
}
