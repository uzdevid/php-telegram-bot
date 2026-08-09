<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Edits a story previously posted by the bot on behalf of a managed business account. Requires the
 * can_manage_stories business bot right. Returns Story on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id', 'story_id', and
 * 'content' fields, then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#editstory
 */
class EditStory extends Method implements MethodInterface {
    /**
     * Creates a new EditStory method and sets the required 'business_connection_id', 'story_id',
     * and 'content' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param int $storyId Unique identifier of the story to edit
     * @param mixed $content Content of the story
     */
    public function __construct(string $businessConnectionId, int $storyId, mixed $content) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('story_id', $storyId);
        $this->addAttribute('content', $content);
    }

    public function methodName(): string {
        return 'editStory';
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
}
