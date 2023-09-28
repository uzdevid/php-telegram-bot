<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ShippingAddress
 *
 * @link https://core.telegram.org/bots/api#shippingaddress
 *
 * This object represents information about an order.
 *
 * @property string $countryCode
 * @property string $state
 * @property string $city
 * @property string $streetLine1
 * @property string $streetLine2
 * @property string $postCode
 */
class ShippingAddress extends BaseObject { }