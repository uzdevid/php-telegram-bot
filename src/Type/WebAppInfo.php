<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type WebAppInfo
 *
 * @link https://core.telegram.org/bots/api#webappinfo
 *
 * Describes a Web App.
 */
class WebAppInfo extends Type {
    /**
     * @var string An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
     */
    public string $url;
}
