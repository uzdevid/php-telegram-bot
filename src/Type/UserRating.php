<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UserRating
 *
 * @link https://core.telegram.org/bots/api#userrating
 *
 * This object describes the rating of a user based on their Telegram Star spendings.
 */
class UserRating extends Type {
    /**
     * @var int Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
     */
    public int $level;

    /**
     * @var int Numerical value of the user's rating; the higher the rating, the better
     */
    public int $rating;

    /**
     * @var int The rating value required to get the current level
     */
    public int $currentLevelRating;

    /**
     * @var int|null Optional. The rating value required to get to the next level; omitted if the maximum level was reached
     */
    public int|null $nextLevelRating;
}
