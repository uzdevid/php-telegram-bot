<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Location
 *
 * @link https://core.telegram.org/bots/api#location
 *
 * This object represents a point on the map.
 *
 * @property float $longitude
 * @property float $latitude
 * @property float $horizontalAccuracy
 * @property int $livePeriod
 * @property int $heading
 * @property int $proximityAlertRadius
 */
class Location extends BaseObject { }