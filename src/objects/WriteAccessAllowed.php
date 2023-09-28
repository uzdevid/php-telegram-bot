<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type WriteAccessAllowed
 *
 * @link https://core.telegram.org/bots/api#writeaccessallowed
 *
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 *
 * @property bool $fromRequest
 * @property string $webAppName
 * @property bool $fromAttachmentMenu
 */
class WriteAccessAllowed extends BaseObject { }