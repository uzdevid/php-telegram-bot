<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Inline;

use UzDevid\Telegram\Bot\Type\InlineQuery;

/**
 * Class InlineQueryUpdate
 */
final class InlineQueryUpdate {
    public function __construct(
        public int         $updateId,
        public InlineQuery $inlineQuery
    ) {
    }
}