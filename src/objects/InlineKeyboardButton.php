<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type InlineKeyboardButton
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @property string $text
 * @property string $url
 * @property string $callbackData
 * @property WebAppInfo $webApp
 * @property LoginUrl $loginUrl
 * @property string $switchInlineQuery
 * @property string $switchInlineQueryCurrentChat
 * @property SwitchInlineQueryChosenChat $switchInlineQueryChosenChat
 * @property CallbackGame $callbackGame
 * @property bool $pay
 */
class InlineKeyboardButton extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'webApp' => WebAppInfo::class,
            'loginUrl' => LoginUrl::class,
            'switchInlineQueryChosenChat' => SwitchInlineQueryChosenChat::class,
            'callbackGame' => CallbackGame::class
        ];
    }
}