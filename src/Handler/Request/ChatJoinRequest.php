<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Type\ChatJoinRequest as ChatJoinRequestType;
use Yiisoft\Hydrator\Hydrator;

abstract class ChatJoinRequest {
    /**
     * @return string
     */
    public function getName(): string {
        return 'chat_join_request';
    }

    /**
     * @param array $payload
     * @return ChatJoinRequestType
     */
    public function getType(array $payload): ChatJoinRequestType {
        return (new Hydrator())->create(ChatJoinRequestType::class, $payload);
    }

    /**
     * @param ChatJoinRequestType $update
     *
     * @return void
     */
    abstract public function handle(ChatJoinRequestType $update): void;
}