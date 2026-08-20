<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Class InlineQuery
 *
 */
class InlineQuery extends Type {
    public int $updateId;
    /**
     * Unique identifier for this query
     */
    public string $id;
    /**
     * Sender
     */
    public User $from;
    /**
     * Text of the query (up to 256 characters)
     */
    public string $query;
    /**
     * Offset of the results to be returned, can be controlled by the bot
     */
    public string $offset;
}
