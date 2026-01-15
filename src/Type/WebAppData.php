<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type WebAppData
 *
 * @link https://core.telegram.org/bots/api#webappdata
 *
 * Describes data sent from a Web App to the bot.
 */
class WebAppData extends Type {
    /**
     * @var string The data. Be aware that a bad client can send arbitrary data in this field.
     */
    public string $data;

    /**
     * @var string Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
     */
    public string $buttonText;
}
