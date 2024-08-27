<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Type\ChatJoinRequest;

interface ChatRequestInterface {
    /**
     * @param ChatJoinRequest $request
     *
     * @return void
     */
    public function handle(ChatJoinRequest $request): void;
}