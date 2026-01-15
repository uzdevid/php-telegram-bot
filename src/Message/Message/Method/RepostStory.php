<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method RepostStory
 *
 * Reposts a story on behalf of a business account from another business account. Both business accounts must be managed by the same bot, and the story on the source account must have been posted (or reposted) by the bot. Requires the can_manage_stories business bot right for both business accounts. Returns Story on success.
 */
class RepostStory extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId, int $fromChatId, int $fromStoryId, int $activePeriod) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('from_chat_id', $fromChatId);
        $this->addAttribute('from_story_id', $fromStoryId);
        $this->addAttribute('active_period', $activePeriod);
    }

    public function methodName(): string {
        return "repostStory";
    }

    /**
     * @param bool $postToChatPage
     *
     * @return $this
     */
    public function postToChatPage(bool $postToChatPage): static {
        $this->addAttribute('post_to_chat_page', $postToChatPage);
        return $this;
    }

    /**
     * @param bool $protectContent
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }
}
