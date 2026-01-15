<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method EditForumTopic
 *
 * Use this method to edit name and icon of a topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 */
class EditForumTopic extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $messageThreadId Unique identifier for the target message thread of the forum topic
     */
    public function __construct(int|string $chatId, int $messageThreadId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_thread_id', $messageThreadId);
    }

    public function methodName(): string {
        return "editForumTopic";
    }

    /**
     * @param string $name New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
     *
     * @return $this
     */
    public function name(string $name): static {
        $this->addAttribute('name', $name);
        return $this;
    }

    /**
     * @param string $iconCustomEmojiId New unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept
     *
     * @return $this
     */
    public function iconCustomEmojiId(string $iconCustomEmojiId): static {
        $this->addAttribute('icon_custom_emoji_id', $iconCustomEmojiId);
        return $this;
    }
}
