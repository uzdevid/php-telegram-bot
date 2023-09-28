<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;
use uzdevid\telegram\bot\objects\UserProfilePhotos;

class GetUserProfilePhotos extends Method implements MethodInterface {

    protected static string $__userId = 'user_id';
    protected static string $__offset = 'offset';
    protected static string $__limit = 'limit';

    public function __construct(int $userId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__userId, $userId);
    }

    public function methodName(): string {
        return "getUserProfilePhotos";
    }

    public function userId(int $userId): self {
        $this->addAttribute(self::$__userId, $userId);
        return $this;
    }

    public function offset(int $offset): self {
        $this->addAttribute(self::$__offset, $offset);
        return $this;
    }

    public function limit(int $limit): self {
        $this->addAttribute(self::$__limit, $limit);
        return $this;
    }

    public function response(): string {
        return UserProfilePhotos::class;
    }
}