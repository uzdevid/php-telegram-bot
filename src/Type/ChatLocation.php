<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatLocation
 *
 * @link https://core.telegram.org/bots/api#chatlocation
 *
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends Type {
    /**
     * @var Location The location to which the supergroup is connected. Can't be a live location.
     */
    public Location $location;

    /**
     * @var string Location address; 1-64 characters, as defined by the chat owner
     */
    public string $address;
}
