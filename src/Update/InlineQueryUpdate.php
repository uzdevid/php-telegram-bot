<?php

namespace UzDevid\Telegram\Bot\Update;

use UzDevid\Telegram\Bot\Type\InlineQuery;

/**
 * Class InlineQueryUpdate
 */
final class InlineQueryUpdate {
    public int $updateId;
    public InlineQuery $inlineQuery;
}