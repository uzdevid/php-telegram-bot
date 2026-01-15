<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChosenInlineResult
 *
 * @link https://core.telegram.org/bots/api#choseninlineresult
 *
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
class ChosenInlineResult extends Type {
    /**
     * @var string The unique identifier for the result that was chosen
     */
    public string $resultId;

    /**
     * @var User The user that chose the result
     */
    public User $from;

    /**
     * @var Location|null Optional. Sender location, only for bots that require user location
     */
    public Location|null $location;

    /**
     * @var string|null Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
     */
    public string|null $inlineMessageId;

    /**
     * @var string The query that was used to obtain the result
     */
    public string $query;
}
