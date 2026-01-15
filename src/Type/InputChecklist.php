<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputChecklist
 *
 * @link https://core.telegram.org/bots/api#inputchecklist
 *
 * Describes a checklist to create.
 */
class InputChecklist extends Type {
    /**
     * @var string Title of the checklist; 1-255 characters after entities parsing
     */
    public string $title;

    /**
     * @var string|null Optional. Mode for parsing entities in the title. See formatting options for more details.
     */
    public string|null $parseMode;

    /**
     * @var MessageEntity[]|null Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
     */
    public array|null $titleEntities;

    /**
     * @var InputChecklistTask[] List of 1-30 tasks in the checklist
     */
    public array $tasks;

    /**
     * @var bool|null Optional. Pass True if other users can add tasks to the checklist
     */
    public bool|null $othersCanAddTasks;

    /**
     * @var bool|null Optional. Pass True if other users can mark tasks as done or not done in the checklist
     */
    public bool|null $othersCanMarkTasksAsDone;
}
