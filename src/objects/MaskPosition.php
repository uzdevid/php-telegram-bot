<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type MaskPosition
 *
 * @link https://core.telegram.org/bots/api#maskposition
 *
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @property string $point
 * @property float $xShift
 * @property float $yShift
 * @property float $scale
 */
class MaskPosition extends BaseObject { }