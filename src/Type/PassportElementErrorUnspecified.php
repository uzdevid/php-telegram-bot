<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PassportElementErrorUnspecified
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorunspecified
 *
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
class PassportElementErrorUnspecified extends Type {
    /**
     * @var string Error source, must be unspecified
     */
    public string $source;

    /**
     * @var string Type of element of the user's Telegram Passport which has the issue
     */
    public string $type;

    /**
     * @var string Base64-encoded element hash
     */
    public string $elementHash;

    /**
     * @var string Error message
     */
    public string $message;
}
