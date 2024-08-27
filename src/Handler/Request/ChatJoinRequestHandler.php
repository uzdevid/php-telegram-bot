<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Update\ChatJoinRequestUpdate;
use Yiisoft\Hydrator\Hydrator;

abstract class ChatJoinRequestHandler {
    /**
     * @return string
     */
    public function getName(): string {
        return 'chatJoinRequest';
    }

    /**
     * @param array $payload
     * @return \UzDevid\Telegram\Bot\Update\ChatJoinRequestUpdate
     */
    public function getType(array $payload): ChatJoinRequestUpdate {
        return (new Hydrator())->create(ChatJoinRequestUpdate::class, $payload);
    }

    /**
     * @param \UzDevid\Telegram\Bot\Update\ChatJoinRequestUpdate $request
     *
     * @return void
     */
    abstract public function handle(ChatJoinRequestUpdate $request): void;
}