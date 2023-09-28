<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type EncryptedPassportElement
 *
 * @link https://core.telegram.org/bots/api#encryptedpassportelement
 *
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @property string $type
 * @property string $data
 * @property string $phoneNumber
 * @property string $email
 * @property PassportFile[] $files
 * @property PassportFile $frontSide
 * @property PassportFile $reverseSide
 * @property PassportFile $selfie
 * @property PassportFile[] $translation
 * @property string $hash
 */
class EncryptedPassportElement extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'frontSide' => PassportFile::class,
            'reverseSide' => PassportFile::class,
            'selfie' => PassportFile::class
        ];
    }
}