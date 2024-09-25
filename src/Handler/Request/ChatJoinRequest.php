<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Update\ChatJoinRequestUpdate;
use Yiisoft\Hydrator\Hydrator;

abstract class ChatJoinRequest implements RequestInterface {
    protected ChatJoinRequestUpdate $request;

    /**
     * @return string
     */
    public function getName(): string {
        return 'chatJoinRequest';
    }

    /**
     * @param array $payload
     * @return void
     */
    public function buildRequest(array $payload): void {
        $this->request = (new Hydrator)->create(ChatJoinRequestUpdate::class, $payload);
    }

    /**
     *
     * @return void
     */
    abstract public function handle(): void;
}