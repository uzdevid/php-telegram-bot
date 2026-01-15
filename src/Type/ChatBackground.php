<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBackground
 *
 * @link https://core.telegram.org/bots/api#chatbackground
 *
 * This object represents a chat background.
 */
class ChatBackground extends Type {
    /**
     * @var BackgroundType Type of the background
     */
    public BackgroundType $type;
}
