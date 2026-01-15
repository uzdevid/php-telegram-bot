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

    /**
     * @param int $userId Unique identifier of the target user who will receive a Telegram Premium subscription
     * @param int $monthCount Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
     * @param int $starCount Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
     */
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
     * @param string $text Text that will be shown along with the service message about the subscription; 0-128 characters
     *
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * @param string $textParseMode Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
     *
     * @return $this
     */
    public function textParseMode(string $textParseMode): static {
        $this->addAttribute('text_parse_mode', $textParseMode);
        return $this;
    }

    /**
     * @param array $textEntities A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
     *
     * @return $this
     */
    public function textEntities(array $textEntities): static {
        $this->addAttribute('text_entities', $textEntities);
        return $this;
    }
}
