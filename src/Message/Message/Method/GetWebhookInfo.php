<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetWebhookInfo
 *
 * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
 */
class GetWebhookInfo extends Method implements MethodInterface {
    public function __construct(string $url, bool $hasCustomCertificate, int $pendingUpdateCount) {
        parent::__construct();
        $this->addAttribute('url', $url);
        $this->addAttribute('has_custom_certificate', $hasCustomCertificate);
        $this->addAttribute('pending_update_count', $pendingUpdateCount);
    }

    public function methodName(): string {
        return "getWebhookInfo";
    }

    /**
     * @param string $ipAddress
     *
     * @return $this
     */
    public function ipAddress(string $ipAddress): static {
        $this->addAttribute('ip_address', $ipAddress);
        return $this;
    }

    /**
     * @param int $lastErrorDate
     *
     * @return $this
     */
    public function lastErrorDate(int $lastErrorDate): static {
        $this->addAttribute('last_error_date', $lastErrorDate);
        return $this;
    }

    /**
     * @param string $lastErrorMessage
     *
     * @return $this
     */
    public function lastErrorMessage(string $lastErrorMessage): static {
        $this->addAttribute('last_error_message', $lastErrorMessage);
        return $this;
    }

    /**
     * @param int $lastSynchronizationErrorDate
     *
     * @return $this
     */
    public function lastSynchronizationErrorDate(int $lastSynchronizationErrorDate): static {
        $this->addAttribute('last_synchronization_error_date', $lastSynchronizationErrorDate);
        return $this;
    }

    /**
     * @param int $maxConnections
     *
     * @return $this
     */
    public function maxConnections(int $maxConnections): static {
        $this->addAttribute('max_connections', $maxConnections);
        return $this;
    }

    /**
     * @param array $allowedUpdates
     *
     * @return $this
     */
    public function allowedUpdates(array $allowedUpdates): static {
        $this->addAttribute('allowed_updates', $allowedUpdates);
        return $this;
    }
}
