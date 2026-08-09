<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatLocation
 *
 * @see https://core.telegram.org/bots/api#chatlocation
 *
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends Type {
    public Location $location;
    public string $address;
}
