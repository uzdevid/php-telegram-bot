<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Gifts a Telegram Premium subscription to the given user. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id', 'month_count', and
 * 'star_count' fields, then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#giftpremiumsubscription
 */
class GiftPremiumSubscription extends Method implements MethodInterface {
    /**
     * Creates a new GiftPremiumSubscription method and sets the required 'user_id', 'month_count',
     * and 'star_count' fields.
     *
     * @param int $userId Unique identifier of the target user who will receive a Telegram Premium
     *   subscription
     * @param int $monthCount Number of months the Telegram Premium subscription will be active for
     *   the user; must be one of 3, 6, or 12
     * @param int $starCount Number of Telegram Stars to pay for the Telegram Premium subscription;
     *   must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
     */
    public function __construct(int $userId, int $monthCount, int $starCount) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('month_count', $monthCount);
        $this->addAttribute('star_count', $starCount);
    }

    public function methodName(): string {
        return 'giftPremiumSubscription';
    }

    /**
     * Text that will be shown along with the service message about the subscription; 0-128
     * characters
     *
     * @param string $text Text that will be shown along with the service message about the
     *   subscription; 0-128 characters
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * Mode for parsing entities in the text. See formatting options for more details. Entities
     * other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and
     * “date_time” are ignored.
     *
     * @param string $textParseMode Mode for parsing entities in the text. See formatting options
     *   for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”,
     *   “spoiler”, “custom_emoji”, and “date_time” are ignored.
     * @return $this
     */
    public function textParseMode(string $textParseMode): static {
        $this->addAttribute('text_parse_mode', $textParseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in the gift text. It can be specified
     * instead of text_parse_mode . Entities other than “bold”, “italic”, “underline”,
     * “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
     *
     * @param array $textEntities A JSON-serialized list of special entities that appear in the gift
     *   text. It can be specified instead of text_parse_mode . Entities other than “bold”,
     *   “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are
     *   ignored.
     * @return $this
     */
    public function textEntities(array $textEntities): static {
        $this->addAttribute('text_entities', $textEntities);
        return $this;
    }

    /**
     * Adds one item to the text_entities list. A JSON-serialized list of special entities that
     * appear in the gift text. It can be specified instead of text_parse_mode . Entities other than
     * “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time”
     * are ignored.
     *
     * @param mixed $textEntity Adds one item to the text_entities list. A JSON-serialized list of
     *   special entities that appear in the gift text. It can be specified instead of
     *   text_parse_mode . Entities other than “bold”, “italic”, “underline”, “strikethrough”,
     *   “spoiler”, “custom_emoji”, and “date_time” are ignored.
     * @return $this
     */
    public function addTextEntity(mixed $textEntity): static {
        $this->pushAttribute('text_entities', $textEntity);
        return $this;
    }
}
