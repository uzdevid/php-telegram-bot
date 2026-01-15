<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Game
 *
 * @link https://core.telegram.org/bots/api#game
 *
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
class Game extends Type {
    /**
     * @var string Title of the game
     */
    public string $title;

    /**
     * @var string Description of the game
     */
    public string $description;

    /**
     * @var PhotoSize[] Photo that will be displayed in the game message in chats.
     */
    public array $photo;

    /**
     * @var string|null Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
     */
    public string|null $text;

    /**
     * @var MessageEntity[]|null Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     */
    public array|null $textEntities;

    /**
     * @var Animation|null Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     */
    public Animation|null $animation;
}
