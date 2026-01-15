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
    /**
     * @var EncryptedPassportElement[] Array with information about documents and other Telegram Passport elements that was shared with the bot
     */
    public array $data;

    /**
     * @var EncryptedCredentials Encrypted credentials required to decrypt the data
     */
    public EncryptedCredentials $credentials;
}
