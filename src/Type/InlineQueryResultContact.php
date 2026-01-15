<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultContact
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultcontact
 *
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
class InlineQueryResultContact extends Type {
    /**
     * @var string Type of the result, must be contact
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 Bytes
     */
    public string $id;

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

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the contact
     */
    public InputMessageContent|null $inputMessageContent;

    /**
     * @var string|null Optional. Url of the thumbnail for the result
     */
    public string|null $thumbnailUrl;

    /**
     * @var int|null Optional. Thumbnail width
     */
    public int|null $thumbnailWidth;

    /**
     * @var int|null Optional. Thumbnail height
     */
    public int|null $thumbnailHeight;
}
