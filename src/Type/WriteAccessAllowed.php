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
    /**
     * @var bool|null Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
     */
    public bool|null $fromRequest;

    /**
     * @var string|null Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
     */
    public string|null $webAppName;

    /**
     * @var bool|null Optional. True, if the access was granted when the bot was added to the attachment or side menu
     */
    public bool|null $fromAttachmentMenu;
}
