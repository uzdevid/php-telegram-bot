<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputFile;

/**
 * Method SetWebhook
 *
 * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized Update. In case of an unsuccessful request (a request with response HTTP status code different from 2XY), we will repeat the request and give up after a reasonable amount of attempts. Returns True on success.
 */
class SetWebhook extends Method implements MethodInterface {
    public function __construct(string $url) {
        parent::__construct();
        $this->addAttribute('url', $url);
    }

    public function methodName(): string {
        return "setWebhook";
    }

    /**
     * @param InputFile $certificate
     *
     * @return $this
     */
    public function certificate(InputFile $certificate): static {
        $this->addAttribute('certificate', $certificate);
        return $this;
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

    /**
     * @param bool $dropPendingUpdates
     *
     * @return $this
     */
    public function dropPendingUpdates(bool $dropPendingUpdates): static {
        $this->addAttribute('drop_pending_updates', $dropPendingUpdates);
        return $this;
    }

    /**
     * @param string $secretToken
     *
     * @return $this
     */
    public function secretToken(string $secretToken): static {
        $this->addAttribute('secret_token', $secretToken);
        return $this;
    }
}
