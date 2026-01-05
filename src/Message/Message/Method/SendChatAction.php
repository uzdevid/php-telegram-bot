<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendChatAction extends Method implements MethodInterface {
    /**
     * @param string $action
     */
    public function __construct(string $action) {
        parent::__construct();
        $this->addAttribute('action', $action);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'sendChatAction';
    }

    /**
     * @param string $businessConnectionId
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }
}