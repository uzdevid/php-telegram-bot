<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type EncryptedCredentials
 *
 * @link https://core.telegram.org/bots/api#encryptedcredentials
 *
 * Describes data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 *
 * @property string $data
 * @property string $hash
 * @property string $secret
 */
class EncryptedCredentials extends BaseObject { }