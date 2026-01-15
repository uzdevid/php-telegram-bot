<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BusinessOpeningHours
 *
 * @link https://core.telegram.org/bots/api#businessopeninghours
 *
 * Describes the opening hours of a business.
 */
class BusinessOpeningHours extends Type {
    /**
     * @var string Unique name of the time zone for which the opening hours are defined
     */
    public string $timeZoneName;

    /**
     * @var BusinessOpeningHoursInterval[] List of time intervals describing business opening hours
     */
    public array $openingHours;
}
