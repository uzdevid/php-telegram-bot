<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputStoryContent;

/**
 * Method EditStory
 *
 * Edits a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns Story on success.
 */
class EditStory extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param int $storyId Unique identifier of the story to edit
     * @param InputStoryContent $content Content of the story
     */
    public function __construct(string $businessConnectionId, int $storyId, InputStoryContent $content) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('story_id', $storyId);
        $this->addAttribute('content', $content);
    }

    public function methodName(): string {
        return "editStory";
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
}
