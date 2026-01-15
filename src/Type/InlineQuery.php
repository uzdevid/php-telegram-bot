<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQuery
 *
 * @link https://core.telegram.org/bots/api#inlinequery
 *
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 */
class InlineQuery extends Type {
    /**
     * @var string Unique identifier for this query
     */
    public string $id;

    /**
     * @var User Sender
     */
    public User $from;

    /**
     * @var string Text of the query (up to 256 characters)
     */
    public string $query;

    /**
     * @var string Offset of the results to be returned, can be controlled by the bot
     */
    public string $offset;

    /**
     * @var string|null Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
     */
    public string|null $chatType;

    /**
     * @var Location|null Optional. Sender location, only for bots that request user location
     */
    public Location|null $location;
}
