<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChecklistTasksAdded
 *
 * @link https://core.telegram.org/bots/api#checklisttasksadded
 *
 * Describes a service message about tasks added to a checklist.
 */
class ChecklistTasksAdded extends Type {
    /**
     * @var Message|null Optional. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public Message|null $checklistMessage;

    /**
     * @var ChecklistTask[] List of tasks added to the checklist
     */
    public array $tasks;
}
