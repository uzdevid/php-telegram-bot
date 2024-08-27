<?php

namespace UzDevid\Telegram\Bot\Update;

use UzDevid\Telegram\Bot\Core\Type;
use UzDevid\Telegram\Bot\Type\ChatJoinRequest;

/**
 * Type ChatJoinRequest
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * Represents a join request sent to a chat.
 */
final class ChatJoinRequestUpdate extends Type {
    public int $updateId;
    public ChatJoinRequest $chatJoinRequest;
}