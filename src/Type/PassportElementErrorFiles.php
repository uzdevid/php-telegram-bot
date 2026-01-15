<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PassportElementErrorFiles
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorfiles
 *
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles extends Type {
    /**
     * @var string Error source, must be files
     */
    public string $source;

    /**
     * @var string The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     */
    public string $type;

    /**
     * @var string[] List of base64-encoded file hashes
     */
    public array $fileHashes;

    /**
     * @var string Error message
     */
    public string $message;
}
