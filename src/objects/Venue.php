<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Venue
 *
 * @link https://core.telegram.org/bots/api#venue
 *
 * This object represents a venue.
 *
 * @property Location $location
 * @property string $title
 * @property string $address
 * @property string $foursquareId
 * @property string $foursquareType
 * @property string $googlePlaceId
 * @property string $googlePlaceType
 */
class Venue extends BaseObject { }