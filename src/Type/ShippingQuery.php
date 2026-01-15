<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ShippingQuery
 *
 * @link https://core.telegram.org/bots/api#shippingquery
 *
 * This object contains information about an incoming shipping query.
 */
class ShippingQuery extends Type {
    /**
     * @var string Unique query identifier
     */
    public string $id;

    /**
     * @var User User who sent the query
     */
    public User $from;

    /**
     * @var string Bot-specified invoice payload
     */
    public string $invoicePayload;

    /**
     * @var ShippingAddress User specified shipping address
     */
    public ShippingAddress $shippingAddress;
}
