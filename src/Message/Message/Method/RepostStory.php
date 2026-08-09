<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Reposts a story on behalf of a business account from another business account. Both business
 * accounts must be managed by the same bot, and the story on the source account must have been
 * posted (or reposted) by the bot. Requires the can_manage_stories business bot right for both
 * business accounts. Returns Story on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id', 'from_chat_id',
 * 'from_story_id', and 'active_period' fields, then chain optional builder methods before
 * dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#repoststory
 */
class RepostStory extends Method implements MethodInterface {
    /**
     * Creates a new RepostStory method and sets the required 'business_connection_id',
     * 'from_chat_id', 'from_story_id', and 'active_period' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param int $fromChatId Unique identifier of the chat which posted the story that should be
     *   reposted
     * @param int $fromStoryId Unique identifier of the story that should be reposted
     * @param int $activePeriod Period after which the story is moved to the archive, in seconds;
     *   must be one of 6 * 3600 , 12 * 3600 , 86400 , or 2 * 86400
     */
    public function __construct(string $businessConnectionId, int $fromChatId, int $fromStoryId, int $activePeriod) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('from_chat_id', $fromChatId);
        $this->addAttribute('from_story_id', $fromStoryId);
        $this->addAttribute('active_period', $activePeriod);
    }

    public function methodName(): string {
        return 'repostStory';
    }

    /**
     * Pass True to keep the story accessible after it expires
     *
     * @param bool $postToChatPage Pass True to keep the story accessible after it expires
     *
     * @return $this
     */
    public function postToChatPage(bool $postToChatPage = true): static {
        $this->addAttribute('post_to_chat_page', $postToChatPage);
        return $this;
    }

    /**
     * Pass True if the content of the story must be protected from forwarding and screenshotting
     *
     * @param bool $protectContent Pass True if the content of the story must be protected from
     *   forwarding and screenshotting
     *
     * @return $this
     */
    public function protectContent(bool $protectContent = true): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }
}
