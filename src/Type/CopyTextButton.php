<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type CopyTextButton
 *
 * @link https://core.telegram.org/bots/api#copytextbutton
 *
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 */
class CopyTextButton extends Type {
    /**
     * @var string The text to be copied to the clipboard; 1-256 characters
     */
    public string $text;
}
