<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteWebhook
 *
 * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
 */
class DeleteWebhook extends Method implements MethodInterface {
    public function __construct() {
        parent::__construct();

    }

    public function methodName(): string {
        return "deleteWebhook";
    }

    /**
     * @param bool $dropPendingUpdates
     *
     * @return $this
     */
    public function dropPendingUpdates(bool $dropPendingUpdates): static {
        $this->addAttribute('drop_pending_updates', $dropPendingUpdates);
        return $this;
    }
}
