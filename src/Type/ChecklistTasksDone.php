<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChecklistTasksDone
 *
 * @link https://core.telegram.org/bots/api#checklisttasksdone
 *
 * Describes a service message about checklist tasks marked as done or not done.
 */
class ChecklistTasksDone extends Type {
    /**
     * @var Message|null Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public Message|null $checklistMessage;

    /**
     * @var int[]|null Optional. Identifiers of the tasks that were marked as done
     */
    public array|null $markedAsDoneTaskIds;

    /**
     * @var int[]|null Optional. Identifiers of the tasks that were marked as not done
     */
    public array|null $markedAsNotDoneTaskIds;
}
