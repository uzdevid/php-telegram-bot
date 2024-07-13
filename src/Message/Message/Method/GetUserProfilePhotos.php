<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\UserProfilePhotos;

class GetUserProfilePhotos extends Method implements MethodInterface {
    /**
     * @param int $userId
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getUserProfilePhotos";
    }

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function offset(int $offset): self {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * @param int $limit
     *
     * @return $this
     */
    public function limit(int $limit): self {
        $this->addAttribute('limit', $limit);
        return $this;
    }

    /**
     * @return string
     */
    public function response(): string {
        return UserProfilePhotos::class;
    }
}