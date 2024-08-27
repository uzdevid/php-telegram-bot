<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Type\ChatJoinRequestUpdate;
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
     * @return ChatJoinRequestUpdate
     */
    public function getType(array $payload): ChatJoinRequestUpdate {
        return (new Hydrator())->create(ChatJoinRequestUpdate::class, $payload);
    }

    /**
     * @param ChatJoinRequestUpdate $request
     *
     * @return void
     */
    abstract public function handle(ChatJoinRequestUpdate $request): void;
}