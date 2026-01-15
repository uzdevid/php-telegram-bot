<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PassportElementError
 *
 * @link https://core.telegram.org/bots/api#passportelementerror
 *
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 */
class PassportElementError extends Type {
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
