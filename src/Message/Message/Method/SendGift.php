<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method SendGift
 *
 * Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns True on success.
 */
class SendGift extends Method implements MethodInterface {
    public function __construct(string $giftId) {
        parent::__construct();
        $this->addAttribute('gift_id', $giftId);
    }

    public function methodName(): string {
        return "sendGift";
    }

    /**
     * @param int $userId
     *
     * @return $this
     */
    public function userId(int $userId): static {
        $this->addAttribute('user_id', $userId);
        return $this;
    }

    /**
     * @param int | string $chatId
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param bool $payForUpgrade
     *
     * @return $this
     */
    public function payForUpgrade(bool $payForUpgrade): static {
        $this->addAttribute('pay_for_upgrade', $payForUpgrade);
        return $this;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * @param string $textParseMode
     *
     * @return $this
     */
    public function textParseMode(string $textParseMode): static {
        $this->addAttribute('text_parse_mode', $textParseMode);
        return $this;
    }

    /**
     * @param array $textEntities
     *
     * @return $this
     */
    public function textEntities(array $textEntities): static {
        $this->addAttribute('text_entities', $textEntities);
        return $this;
    }
}
