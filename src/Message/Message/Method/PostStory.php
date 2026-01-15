<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputStoryContent;

/**
 * Method PostStory
 *
 * Posts a story on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns Story on success.
 */
class PostStory extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId, InputStoryContent $content, int $activePeriod) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('content', $content);
        $this->addAttribute('active_period', $activePeriod);
    }

    public function methodName(): string {
        return "postStory";
    }

    /**
     * @param string $caption
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * @param string $parseMode
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * @param array $captionEntities
     *
     * @return $this
     */
    public function captionEntities(array $captionEntities): static {
        $this->addAttribute('caption_entities', $captionEntities);
        return $this;
    }

    /**
     * @param array $areas
     *
     * @return $this
     */
    public function areas(array $areas): static {
        $this->addAttribute('areas', $areas);
        return $this;
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
