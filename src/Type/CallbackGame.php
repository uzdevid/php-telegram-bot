<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type CallbackGame
 *
 * @link https://core.telegram.org/bots/api#callbackgame
 *
 * A placeholder, currently holds no information. Use BotFather to set up your game.
 */
class CallbackGame extends Type {
    /**
     * @var int Yes
     */
    public int $userId;

    /**
     * @var int Yes
     */
    public int $score;

    /**
     * @var bool|null Optional
     */
    public bool|null $force;

    /**
     * @var bool|null Optional
     */
    public bool|null $disableEditMessage;

    /**
     * @var int|null Optional
     */
    public int|null $chatId;

    /**
     * @var int|null Optional
     */
    public int|null $messageId;

    /**
     * @var string|null Optional
     */
    public string|null $inlineMessageId;
}
