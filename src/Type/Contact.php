<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Contact
 *
 * @link https://core.telegram.org/bots/api#contact
 *
 * This object represents a phone contact.
 */
class Contact extends Type {
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
     * @var int|null Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int|null $userId;

    /**
     * @var string|null Optional. Additional data about the contact in the form of a vCard
     */
    public string|null $vcard;
}
