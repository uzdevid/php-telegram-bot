<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get a list of profile audios for a user. Returns a UserProfileAudios object.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#getuserprofileaudios
 */
class GetUserProfileAudios extends Method implements MethodInterface {
    /**
     * Creates a new GetUserProfileAudios method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'getUserProfileAudios';
    }

    /**
     * Sequential number of the first audio to be returned. By default, all audios are returned.
     *
     * @param int $offset Sequential number of the first audio to be returned. By default, all
     *   audios are returned.
     * @return $this
     */
    public function offset(int $offset): static {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * Limits the number of audios to be retrieved. Values between 1-100 are accepted. Defaults to
     * 100.
     *
     * @param int $limit Limits the number of audios to be retrieved. Values between 1-100 are
     *   accepted. Defaults to 100.
     * @return $this
     */
    public function limit(int $limit): static {
        $this->addAttribute('limit', $limit);
        return $this;
    }
}
