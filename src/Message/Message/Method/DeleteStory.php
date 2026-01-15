<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteStory
 *
 * Deletes a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns True on success.
 */
class DeleteStory extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId, int $storyId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('story_id', $storyId);
    }

    public function methodName(): string {
        return "deleteStory";
    }


}
