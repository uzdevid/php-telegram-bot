<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to remove webhook integration if you decide to switch back to getUpdates .
 * Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#deletewebhook
 */
class DeleteWebhook extends Method implements MethodInterface {
    public function methodName(): string {
        return 'deleteWebhook';
    }

    /**
     * Pass True to drop all pending updates
     *
     * @param bool $dropPendingUpdates Pass True to drop all pending updates
     *
     * @return $this
     */
    public function dropPendingUpdates(bool $dropPendingUpdates = true): static {
        $this->addAttribute('drop_pending_updates', $dropPendingUpdates);
        return $this;
    }
}
