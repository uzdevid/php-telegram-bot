<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SentWebAppMessage
 *
 * @link https://core.telegram.org/bots/api#sentwebappmessage
 *
 * Describes an inline message sent by a Web App on behalf of a user.
 */
class SentWebAppMessage extends Type {
    /**
     * @var string|null Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
     */
    public string|null $inlineMessageId;
}
