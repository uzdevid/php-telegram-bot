<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PassportElementErrorDataField
 *
 * @link https://core.telegram.org/bots/api#passportelementerrordatafield
 *
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
class PassportElementErrorDataField extends Type {
    /**
     * @var string Error source, must be data
     */
    public string $source;

    /**
     * @var string The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
     */
    public string $type;

    /**
     * @var string Name of the data field which has the error
     */
    public string $fieldName;

    /**
     * @var string Base64-encoded data hash
     */
    public string $dataHash;

    /**
     * @var string Error message
     */
    public string $message;
}
