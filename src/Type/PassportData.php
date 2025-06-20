<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PassportData
 *
 * @link https://core.telegram.org/bots/api#passportdata
 *
 * Describes Telegram Passport data shared with the bot by the user.
 */
class PassportData extends Type {
    public EncryptedPassportElement $data;
    public EncryptedCredentials $credentials;
}