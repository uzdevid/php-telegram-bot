<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MaskPosition
 *
 * @link https://core.telegram.org/bots/api#maskposition
 *
 * This object describes the position on faces where a mask should be placed by default.
 */
class MaskPosition extends Type {
    public string $point;
    public float $xShift;
    public float $yShift;
    public float $scale;
}