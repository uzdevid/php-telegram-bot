<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetUserProfilePhotos
 *
 * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 */
class GetUserProfilePhotos extends Method implements MethodInterface {

    /**
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "getUserProfilePhotos";
    }

    /**
     * @param int $offset Sequential number of the first photo to be returned. By default, all photos are returned.
     *
     * @return $this
     */
    public function offset(int $offset): static {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * @param int $limit Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @return $this
     */
    public function limit(int $limit): static {
        $this->addAttribute('limit', $limit);
        return $this;
    }
}
