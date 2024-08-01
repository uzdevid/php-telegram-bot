<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\objects\ChatJoinRequest;
use uzdevid\telegram\bot\objects\Message;

interface ChatJoinRequestInterface {
    /**
     * @param Bot $bot
     * @param ChatJoinRequest $message
     * @return bool
     */
    public static function canHandle(Bot $bot, ChatJoinRequest $message): bool;

    /**
     * @param Bot $bot
     * @param Message $message
     * @return void
     */
    public function handle(Bot $bot, Message $message): void;
}