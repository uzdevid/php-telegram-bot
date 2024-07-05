<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForceReply
 *
 * @link https://core.telegram.org/bots/api#forcereply
 *
 * Upon receiving a message with this object,
 * Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply').
 * This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 */
class ForceReply extends Type {
    public bool $forceReply;
    public string $inputFieldPlaceholder;
    public bool $selective;
}