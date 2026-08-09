<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\UserProfilePhotos;
use Yiisoft\Hydrator\Hydrator;

/**
 * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#getuserprofilephotos
 */
class GetUserProfilePhotos extends Method implements MethodInterface {
    /**
     * Creates a new GetUserProfilePhotos method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'getUserProfilePhotos';
    }

    /**
     * Sequential number of the first photo to be returned. By default, all photos are returned.
     *
     * @param int $offset Sequential number of the first photo to be returned. By default, all
     *   photos are returned.
     *
     * @return $this
     */
    public function offset(int $offset): self {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to
     * 100.
     *
     * @param int $limit Limits the number of photos to be retrieved. Values between 1-100 are
     *   accepted. Defaults to 100.
     *
     * @return $this
     */
    public function limit(int $limit): self {
        $this->addAttribute('limit', $limit);
        return $this;
    }

    /**
     * Hydrates the successful Bot API response into a UserProfilePhotos instance.
     *
     * @param array $data raw Telegram Bot API response payload
     *
     * @return UserProfilePhotos
     */
    public function response(array $data): UserProfilePhotos {
        return (new Hydrator())->create(UserProfilePhotos::class, $data['result']);
    }
}
