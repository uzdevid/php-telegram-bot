<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\objects\ChatJoinRequest;

interface RequestInterface {
    public static function objectName(): string;

    /**
     * @return ChatJoinRequest
     */
    public function body(): ChatJoinRequest;

    public function makeObjects(): array;
}