<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Class InlineQuery
 *
 * @package UzDevid\Telegram\Bot\objects
 */
class InlineQuery extends Type {
    public int $updateId;
    public string $id;
    public User $from;
    public string $query;
    public string $offset;
}