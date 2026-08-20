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
    /**
     * The location to which the supergroup is connected. Can't be a live location.
     */
    public Location $location;
    /**
     * Location address; 1-64 characters, as defined by the chat owner
     */
    public string $address;
}
