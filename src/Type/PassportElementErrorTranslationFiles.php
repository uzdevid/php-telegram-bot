<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PassportElementErrorTranslationFiles
 *
 * @link https://core.telegram.org/bots/api#passportelementerrortranslationfiles
 *
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
class PassportElementErrorTranslationFiles extends Type {
    /**
     * @var string Error source, must be translation_files
     */
    public string $source;

    /**
     * @var string Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
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
