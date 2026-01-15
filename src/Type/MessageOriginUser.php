<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageOriginUser
 *
 * @link https://core.telegram.org/bots/api#messageoriginuser
 *
 * The message was originally sent by a known user.
 */
class MessageOriginUser extends Type {
    /**
     * @var string Type of the message origin, always “user”
     */
    public string $type;

    /**
     * @var int Date the message was sent originally in Unix time
     */
    public int $date;

    /**
     * @var User User that sent the message originally
     */
    public User $senderUser;
}
