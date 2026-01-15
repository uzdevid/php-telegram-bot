<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetUpdates
 *
 * Use this method to receive incoming updates using long polling (wiki). Returns an Array of Update objects.
 */
class GetUpdates extends Method implements MethodInterface {
    public function __construct() {
        parent::__construct();

    }

    public function methodName(): string {
        return "getUpdates";
    }

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function offset(int $offset): static {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * @param int $limit
     *
     * @return $this
     */
    public function limit(int $limit): static {
        $this->addAttribute('limit', $limit);
        return $this;
    }

    /**
     * @param int $timeout
     *
     * @return $this
     */
    public function timeout(int $timeout): static {
        $this->addAttribute('timeout', $timeout);
        return $this;
    }

    /**
     * @param array $allowedUpdates
     *
     * @return $this
     */
    public function allowedUpdates(array $allowedUpdates): static {
        $this->addAttribute('allowed_updates', $allowedUpdates);
        return $this;
    }
}
