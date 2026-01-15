<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method GetAvailableGifts
 *
 * Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no parameters. Returns a Gifts object.
 */
class GetAvailableGifts extends Method implements MethodInterface {

    /**
     * @param string $giftId Identifier of the gift; limited gifts can't be sent to channel chats
     */
    public function __construct(string $giftId) {
        parent::__construct();

        $this->addAttribute('gift_id', $giftId);
    }

    public function methodName(): string {
        return "getAvailableGifts";
    }

    /**
     * @param int $userId Required if chat_id is not specified. Unique identifier of the target user who will receive the gift.
     *
     * @return $this
     */
    public function userId(int $userId): static {
        $this->addAttribute('user_id', $userId);
        return $this;
    }

    /**
     * @param int | string $chatId Required if user_id is not specified. Unique identifier for the chat or username of the channel (in the format @channelusername) that will receive the gift.
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param bool $payForUpgrade Pass True to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
     *
     * @return $this
     */
    public function payForUpgrade(bool $payForUpgrade): static {
        $this->addAttribute('pay_for_upgrade', $payForUpgrade);
        return $this;
    }

    /**
     * @param string $text Text that will be shown along with the gift; 0-128 characters
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
