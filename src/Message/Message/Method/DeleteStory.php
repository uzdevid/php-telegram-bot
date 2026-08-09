<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Deletes a story previously posted by the bot on behalf of a managed business account. Requires
 * the can_manage_stories business bot right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' and 'story_id'
 * fields and dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#deletestory
 */
class DeleteStory extends Method implements MethodInterface {
    /**
     * Creates a new DeleteStory method and sets the required 'business_connection_id' and
     * 'story_id' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param int $storyId Unique identifier of the story to delete
     */
    public function __construct(string $businessConnectionId, int $storyId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('story_id', $storyId);
    }

    public function methodName(): string {
        return 'deleteStory';
    }
}
