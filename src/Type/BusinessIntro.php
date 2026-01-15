<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BusinessIntro
 *
 * @link https://core.telegram.org/bots/api#businessintro
 *
 * Contains information about the start page settings of a Telegram Business account.
 */
class BusinessIntro extends Type {
    /**
     * @var string|null Optional. Title text of the business intro
     */
    public string|null $title;

    /**
     * @var string|null Optional. Message text of the business intro
     */
    public string|null $message;

    /**
     * @var Sticker|null Optional. Sticker of the business intro
     */
    public Sticker|null $sticker;
}
