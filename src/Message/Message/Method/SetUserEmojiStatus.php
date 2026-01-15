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

    /**
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "setUserEmojiStatus";
    }

    /**
     * @param string $emojiStatusCustomEmojiId Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
     *
     * @return $this
     */
    public function emojiStatusCustomEmojiId(string $emojiStatusCustomEmojiId): static {
        $this->addAttribute('emoji_status_custom_emoji_id', $emojiStatusCustomEmojiId);
        return $this;
    }

    /**
     * @param int $emojiStatusExpirationDate Expiration date of the emoji status, if any
     *
     * @return $this
     */
    public function emojiStatusExpirationDate(int $emojiStatusExpirationDate): static {
        $this->addAttribute('emoji_status_expiration_date', $emojiStatusExpirationDate);
        return $this;
    }
}
