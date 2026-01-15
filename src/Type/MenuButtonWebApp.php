<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MenuButtonWebApp
 *
 * @link https://core.telegram.org/bots/api#menubuttonwebapp
 *
 * Represents a menu button, which launches a Web App.
 */
class MenuButtonWebApp extends Type {
    /**
     * @var string Type of the button, must be web_app
     */
    public string $type;

    /**
     * @var string Text on the button
     */
    public string $text;

    /**
     * @var WebAppInfo Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Alternatively, a t.me link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
     */
    public WebAppInfo $webApp;
}
