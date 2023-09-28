<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ForceReply
 *
 * @link https://core.telegram.org/bots/api#forcereply
 *
 * Upon receiving a message with this object,
 * Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply').
 * This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @property bool $forceReply
 * @property string $inputFieldPlaceholder
 * @property bool $selective
 */
class ForceReply extends BaseObject { }