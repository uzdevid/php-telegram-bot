<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatShared
 *
 * @link https://core.telegram.org/bots/api#chatshared
 *
 * This object contains information about the chat whose identifier was shared with the bot using a KeyboardButtonRequestChat button.
 *
 * @property int $requestId
 * @property int $chatId
 */
class ChatShared extends BaseObject { }