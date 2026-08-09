<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Class Response
 *
 */
class Response extends Type {
    public int $messageId;
    public User $from;
    public User $user;
    public Chat $chat;
    public int $date;
    public string $text;
}
