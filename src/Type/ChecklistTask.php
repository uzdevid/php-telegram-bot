<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChecklistTask
 *
 * @link https://core.telegram.org/bots/api#checklisttask
 *
 * Describes a task in a checklist.
 */
class ChecklistTask extends Type {
    /**
     * @var int Unique identifier of the task
     */
    public int $id;

    /**
     * @var string Text of the task
     */
    public string $text;

    /**
     * @var MessageEntity[]|null Optional. Special entities that appear in the task text
     */
    public array|null $textEntities;

    /**
     * @var User|null Optional. User that completed the task; omitted if the task wasn't completed by a user
     */
    public User|null $completedByUser;

    /**
     * @var Chat|null Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
     */
    public Chat|null $completedByChat;

    /**
     * @var int|null Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
     */
    public int|null $completionDate;
}
