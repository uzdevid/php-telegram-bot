<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Contact
 *
 * @link https://core.telegram.org/bots/api#contact
 *
 * This object represents a phone contact.
 *
 * @property string $phoneNumber
 * @property string $firstName
 * @property string $lastName
 * @property int $userId
 * @property string $vcard
 */
class Contact extends BaseObject { }