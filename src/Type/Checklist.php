<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Checklist
 *
 * @link https://core.telegram.org/bots/api#checklist
 *
 * Describes a checklist.
 */
class Checklist extends Type {
    /**
     * @var string Title of the checklist
     */
    public string $title;

    /**
     * @var MessageEntity[]|null Optional. Special entities that appear in the checklist title
     */
    public array|null $titleEntities;

    /**
     * @var ChecklistTask[] List of tasks in the checklist
     */
    public array $tasks;

    /**
     * @var bool|null Optional. True, if users other than the creator of the list can add tasks to the list
     */
    public bool|null $othersCanAddTasks;

    /**
     * @var bool|null Optional. True, if users other than the creator of the list can mark tasks as done or not done
     */
    public bool|null $othersCanMarkTasksAsDone;
}
