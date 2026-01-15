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

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param InputStoryContent $content Content of the story
     * @param int $activePeriod Period after which the story is moved to the archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400
     */
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
     * @param string $caption Caption of the story, 0-2048 characters after entities parsing
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * @param string $parseMode Mode for parsing entities in the story caption. See formatting options for more details.
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * @param array $captionEntities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @return $this
     */
    public function captionEntities(array $captionEntities): static {
        $this->addAttribute('caption_entities', $captionEntities);
        return $this;
    }

    /**
     * @param array $areas A JSON-serialized list of clickable areas to be shown on the story
     *
     * @return $this
     */
    public function areas(array $areas): static {
        $this->addAttribute('areas', $areas);
        return $this;
    }

    /**
     * @param bool $postToChatPage Pass True to keep the story accessible after it expires
     *
     * @return $this
     */
    public function postToChatPage(bool $postToChatPage): static {
        $this->addAttribute('post_to_chat_page', $postToChatPage);
        return $this;
    }

    /**
     * @param bool $protectContent Pass True if the content of the story must be protected from forwarding and screenshotting
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }
}
