<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type UserShared
 *
 * @link https://core.telegram.org/bots/api#usershared
 *
 * This object contains information about the user whose identifier was shared with the bot using a KeyboardButtonRequestUser button.
 *
 * @property int $requestId
 * @property int $userId
 */
class UserShared extends BaseObject { }