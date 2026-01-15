<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultGame
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultgame
 *
 * Represents a Game.
 */
class InlineQueryResultGame extends Type {
    /**
     * @var string Type of the result, must be game
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string Short name of the game
     */
    public string $gameShortName;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;
}
