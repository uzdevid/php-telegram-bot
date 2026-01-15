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

    /**
     * @param string $url HTTPS URL to send updates to. Use an empty string to remove webhook integration
     */
    public function __construct(string $url) {
        parent::__construct();

        $this->addAttribute('url', $url);
    }

    public function methodName(): string {
        return "setWebhook";
    }

    /**
     * @param InputFile $certificate Upload your public key certificate so that the root certificate in use can be checked. See our self-signed guide for details.
     *
     * @return $this
     */
    public function certificate(InputFile $certificate): static {
        $this->addAttribute('certificate', $certificate);
        return $this;
    }

    /**
     * @param string $ipAddress The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     *
     * @return $this
     */
    public function ipAddress(string $ipAddress): static {
        $this->addAttribute('ip_address', $ipAddress);
        return $this;
    }

    /**
     * @param int $maxConnections The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to 40. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     *
     * @return $this
     */
    public function maxConnections(int $maxConnections): static {
        $this->addAttribute('max_connections', $maxConnections);
        return $this;
    }

    /**
     * @param array $allowedUpdates A JSON-serialized list of the update types you want your bot to receive. For example, specify ["message", "edited_channel_post", "callback_query"] to only receive updates of these types. See Update for a complete list of available update types. Specify an empty list to receive all update types except chat_member, message_reaction, and message_reaction_count (default). If not specified, the previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     *
     * @return $this
     */
    public function allowedUpdates(array $allowedUpdates): static {
        $this->addAttribute('allowed_updates', $allowedUpdates);
        return $this;
    }

    /**
     * @param bool $dropPendingUpdates Pass True to drop all pending updates
     *
     * @return $this
     */
    public function dropPendingUpdates(bool $dropPendingUpdates): static {
        $this->addAttribute('drop_pending_updates', $dropPendingUpdates);
        return $this;
    }

    /**
     * @param string $secretToken A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters A-Z, a-z, 0-9, _ and - are allowed. The header is useful to ensure that the request comes from a webhook set by you.
     *
     * @return $this
     */
    public function secretToken(string $secretToken): static {
        $this->addAttribute('secret_token', $secretToken);
        return $this;
    }
}
