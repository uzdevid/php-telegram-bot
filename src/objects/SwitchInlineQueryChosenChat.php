<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type SwitchInlineQueryChosenChat
 *
 * @link https://core.telegram.org/bots/api#switchinlinequerychosenchat
 *
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 *
 * @property string $query
 * @property bool $allowUserChats
 * @property bool $allowBotChats
 * @property bool $allowGroupChats
 * @property bool $allowChannelChats
 */
class SwitchInlineQueryChosenChat extends BaseObject { }