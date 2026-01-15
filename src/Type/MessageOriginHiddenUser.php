<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageOriginHiddenUser
 *
 * @link https://core.telegram.org/bots/api#messageoriginhiddenuser
 *
 * The message was originally sent by an unknown user.
 */
class MessageOriginHiddenUser extends Type {
    /**
     * @var string Type of the message origin, always “hidden_user”
     */
    public string $type;

    /**
     * @var int Date the message was sent originally in Unix time
     */
    public int $date;

    /**
     * @var string Name of the user that sent the message originally
     */
    public string $senderUserName;
}
