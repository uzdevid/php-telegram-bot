<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Type\ChatJoinRequest;
use Yiisoft\Hydrator\Hydrator;

abstract class ChatJoinRequestHandler {
    /**
     * @return string
     */
    public function getName(): string {
        return 'chat_join_request';
    }

    /**
     * @param array $payload
     * @return ChatJoinRequest
     */
    public function getType(array $payload): ChatJoinRequest {
        return (new Hydrator())->create(ChatJoinRequest::class, $payload);
    }

    /**
     * @param ChatJoinRequest $request
     *
     * @return void
     */
    abstract public function handle(ChatJoinRequest $request): void;
}