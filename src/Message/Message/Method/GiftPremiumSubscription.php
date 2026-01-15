<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method GiftPremiumSubscription
 *
 * Gifts a Telegram Premium subscription to the given user. Returns True on success.
 */
class GiftPremiumSubscription extends Method implements MethodInterface {
    public function __construct(int $userId, int $monthCount, int $starCount) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('month_count', $monthCount);
        $this->addAttribute('star_count', $starCount);
    }

    public function methodName(): string {
        return "giftPremiumSubscription";
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
