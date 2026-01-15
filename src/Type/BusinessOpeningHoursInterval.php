<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BusinessOpeningHoursInterval
 *
 * @link https://core.telegram.org/bots/api#businessopeninghoursinterval
 *
 * Describes an interval of time during which a business is open.
 */
class BusinessOpeningHoursInterval extends Type {
    /**
     * @var int The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
     */
    public int $openingMinute;

    /**
     * @var int The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
     */
    public int $closingMinute;
}
