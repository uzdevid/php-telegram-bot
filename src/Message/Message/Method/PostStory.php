<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Posts a story on behalf of a managed business account. Requires the can_manage_stories business
 * bot right. Returns Story on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id', 'content', and
 * 'active_period' fields, then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#poststory
 */
class PostStory extends Method implements MethodInterface {
    /**
     * Creates a new PostStory method and sets the required 'business_connection_id', 'content', and
     * 'active_period' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param mixed $content Content of the story
     * @param int $activePeriod Period after which the story is moved to the archive, in seconds;
     *   must be one of 6 * 3600 , 12 * 3600 , 86400 , or 2 * 86400
     */
    public function __construct(string $businessConnectionId, mixed $content, int $activePeriod) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('content', $content);
        $this->addAttribute('active_period', $activePeriod);
    }

    public function methodName(): string {
        return 'postStory';
    }

    /**
     * Caption of the story, 0-2048 characters after entities parsing
     *
     * @param string $caption Caption of the story, 0-2048 characters after entities parsing
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * Mode for parsing entities in the story caption. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the story caption. See formatting
     *   options for more details.
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in the caption, which can be specified
     * instead of parse_mode
     *
     * @param array $captionEntities A JSON-serialized list of special entities that appear in the
     *   caption, which can be specified instead of parse_mode
     * @return $this
     */
    public function captionEntities(array $captionEntities): static {
        $this->addAttribute('caption_entities', $captionEntities);
        return $this;
    }

    /**
     * Adds one item to the caption_entities list. A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of parse_mode
     *
     * @param MessageEntityInterface $captionEntity Adds one item to the caption_entities list. A
     *   JSON-serialized list of special entities that appear in the caption, which can be specified
     *   instead of parse_mode
     * @return $this
     */
    public function addCaptionEntity(MessageEntityInterface $captionEntity): static {
        $this->addMessageEntity('caption_entities', $captionEntity);
        return $this;
    }

    /**
     * A JSON-serialized list of clickable areas to be shown on the story
     *
     * @param array $areas A JSON-serialized list of clickable areas to be shown on the story
     * @return $this
     */
    public function areas(array $areas): static {
        $this->addAttribute('areas', $areas);
        return $this;
    }

    /**
     * Adds one item to the areas list. A JSON-serialized list of clickable areas to be shown on the
     * story
     *
     * @param mixed $area Adds one item to the areas list. A JSON-serialized list of clickable areas
     *   to be shown on the story
     * @return $this
     */
    public function addArea(mixed $area): static {
        $this->pushAttribute('areas', $area);
        return $this;
    }

    /**
     * Pass True to keep the story accessible after it expires
     *
     * @param bool $postToChatPage Pass True to keep the story accessible after it expires
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
     * @return $this
     */
    public function protectContent(bool $protectContent = true): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }
}
