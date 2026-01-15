<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputContactMessageContent
 *
 * @link https://core.telegram.org/bots/api#inputcontactmessagecontent
 *
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
class InputContactMessageContent extends Type {
    /**
     * @var string Contact's phone number
     */
    public string $phoneNumber;

    /**
     * @var string Contact's first name
     */
    public string $firstName;

    /**
     * @var string|null Optional. Contact's last name
     */
    public string|null $lastName;

    /**
     * @var string|null Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     */
    public string|null $vcard;
}
