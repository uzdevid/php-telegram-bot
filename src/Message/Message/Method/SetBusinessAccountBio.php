<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetBusinessAccountBio
 *
 * Changes the bio of a managed business account. Requires the can_change_bio business bot right. Returns True on success.
 */
class SetBusinessAccountBio extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "setBusinessAccountBio";
    }

    /**
     * @param string $bio
     *
     * @return $this
     */
    public function bio(string $bio): static {
        $this->addAttribute('bio', $bio);
        return $this;
    }
}
