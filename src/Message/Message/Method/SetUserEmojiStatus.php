<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetUserEmojiStatus
 *
 * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method requestEmojiStatusAccess. Returns True on success.
 */
class SetUserEmojiStatus extends Method implements MethodInterface {
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "setUserEmojiStatus";
    }

    /**
     * @param string $emojiStatusCustomEmojiId
     *
     * @return $this
     */
    public function emojiStatusCustomEmojiId(string $emojiStatusCustomEmojiId): static {
        $this->addAttribute('emoji_status_custom_emoji_id', $emojiStatusCustomEmojiId);
        return $this;
    }

    /**
     * @param int $emojiStatusExpirationDate
     *
     * @return $this
     */
    public function emojiStatusExpirationDate(int $emojiStatusExpirationDate): static {
        $this->addAttribute('emoji_status_expiration_date', $emojiStatusExpirationDate);
        return $this;
    }
}
