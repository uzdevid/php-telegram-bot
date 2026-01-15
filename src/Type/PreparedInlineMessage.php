<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PreparedInlineMessage
 *
 * @link https://core.telegram.org/bots/api#preparedinlinemessage
 *
 * Describes an inline message to be sent by a user of a Mini App.
 */
class PreparedInlineMessage extends Type {
    /**
     * @var string Unique identifier of the prepared message
     */
    public string $id;

    /**
     * @var int Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
     */
    public int $expirationDate;
}
