<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type PassportData
 *
 * @link https://core.telegram.org/bots/api#passportdata
 *
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * @property EncryptedPassportElement[] $data
 * @property EncryptedCredentials $credentials
 */
class PassportData extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'credentials' => EncryptedCredentials::class
        ];
    }
}