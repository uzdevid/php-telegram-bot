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
}
