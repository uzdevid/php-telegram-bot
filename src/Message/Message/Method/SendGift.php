<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by
 * the receiver. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'gift_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#sendgift
 */
class SendGift extends Method implements MethodInterface {
    /**
     * Creates a new SendGift method and sets the required 'gift_id' field.
     *
     * @param string $giftId Identifier of the gift; limited gifts can't be sent to channel chats
     */
    public function __construct(string $giftId) {
        parent::__construct();
        $this->addAttribute('gift_id', $giftId);
    }

    public function methodName(): string {
        return 'sendGift';
    }

    /**
     * Required if chat_id is not specified. Unique identifier of the target user who will receive
     * the gift.
     *
     * @param int $userId Required if chat_id is not specified. Unique identifier of the target user
     *   who will receive the gift.
     * @return $this
     */
    public function userId(int $userId): static {
        $this->addAttribute('user_id', $userId);
        return $this;
    }

    /**
     * Required if user_id is not specified. Unique identifier for the chat or username of the
     * channel (in the format @username ) that will receive the gift.
     *
     * @param int|string $chatId Required if user_id is not specified. Unique identifier for the
     *   chat or username of the channel (in the format @username ) that will receive the gift.
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Pass True to pay for the gift upgrade from the bot's balance, thereby making the upgrade free
     * for the receiver
     *
     * @param bool $payForUpgrade Pass True to pay for the gift upgrade from the bot's balance,
     *   thereby making the upgrade free for the receiver
     * @return $this
     */
    public function payForUpgrade(bool $payForUpgrade = true): static {
        $this->addAttribute('pay_for_upgrade', $payForUpgrade);
        return $this;
    }

    /**
     * Text that will be shown along with the gift; 0-128 characters
     *
     * @param string $text Text that will be shown along with the gift; 0-128 characters
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
