<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type WriteAccessAllowed
 *
 * @link https://core.telegram.org/bots/api#writeaccessallowed
 *
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 */
class WriteAccessAllowed extends Type {
    public bool $fromRequest;
    public string $webAppName;
    public bool $fromAttachmentMenu;
}