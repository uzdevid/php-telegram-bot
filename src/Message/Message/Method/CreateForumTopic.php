<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method CreateForumTopic
 *
 * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns information about the created topic as a ForumTopic object.
 */
class CreateForumTopic extends Method implements MethodInterface {
    public function __construct(int|string $chatId, string $name) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return "createForumTopic";
    }

    /**
     * @param int $iconColor
     *
     * @return $this
     */
    public function iconColor(int $iconColor): static {
        $this->addAttribute('icon_color', $iconColor);
        return $this;
    }

    /**
     * @param string $iconCustomEmojiId
     *
     * @return $this
     */
    public function iconCustomEmojiId(string $iconCustomEmojiId): static {
        $this->addAttribute('icon_custom_emoji_id', $iconCustomEmojiId);
        return $this;
    }
}
