<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type GameHighScore
 *
 * @link https://core.telegram.org/bots/api#gamehighscore
 *
 * This object represents one row of the high scores table for a game.
 */
class GameHighScore extends Type {
    /**
     * @var int Position in high score table for the game
     */
    public int $position;

    /**
     * @var User User
     */
    public User $user;

    /**
     * @var int Score
     */
    public int $score;
}
