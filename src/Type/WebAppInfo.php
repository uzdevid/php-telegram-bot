<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type WebAppInfo
 *
 * @link https://core.telegram.org/bots/api#webappinfo
 *
 * Describes a Web App.
 *
 * @property string $url
 */
class WebAppInfo extends Type {
    /**
     * @param string $url
     */
    public function __construct(
        public string $url
    ) {
    }
}