<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetUserGifts
 *
 * Returns the gifts owned and hosted by a user. Returns OwnedGifts on success.
 */
class GetUserGifts extends Method implements MethodInterface {

    /**
     * @param int $userId Unique identifier of the user
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "getUserGifts";
    }

    /**
     * @param bool $excludeUnlimited Pass True to exclude gifts that can be purchased an unlimited number of times
     *
     * @return $this
     */
    public function excludeUnlimited(bool $excludeUnlimited): static {
        $this->addAttribute('exclude_unlimited', $excludeUnlimited);
        return $this;
    }

    /**
     * @param bool $excludeLimitedUpgradable Pass True to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
     *
     * @return $this
     */
    public function excludeLimitedUpgradable(bool $excludeLimitedUpgradable): static {
        $this->addAttribute('exclude_limited_upgradable', $excludeLimitedUpgradable);
        return $this;
    }

    /**
     * @param bool $excludeLimitedNonUpgradable Pass True to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
     *
     * @return $this
     */
    public function excludeLimitedNonUpgradable(bool $excludeLimitedNonUpgradable): static {
        $this->addAttribute('exclude_limited_non_upgradable', $excludeLimitedNonUpgradable);
        return $this;
    }

    /**
     * @param bool $excludeFromBlockchain Pass True to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
     *
     * @return $this
     */
    public function excludeFromBlockchain(bool $excludeFromBlockchain): static {
        $this->addAttribute('exclude_from_blockchain', $excludeFromBlockchain);
        return $this;
    }

    /**
     * @param bool $excludeUnique Pass True to exclude unique gifts
     *
     * @return $this
     */
    public function excludeUnique(bool $excludeUnique): static {
        $this->addAttribute('exclude_unique', $excludeUnique);
        return $this;
    }

    /**
     * @param bool $sortByPrice Pass True to sort results by gift price instead of send date. Sorting is applied before pagination.
     *
     * @return $this
     */
    public function sortByPrice(bool $sortByPrice): static {
        $this->addAttribute('sort_by_price', $sortByPrice);
        return $this;
    }

    /**
     * @param string $offset Offset of the first entry to return as received from the previous request; use an empty string to get the first chunk of results
     *
     * @return $this
     */
    public function offset(string $offset): static {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * @param int $limit The maximum number of gifts to be returned; 1-100. Defaults to 100
     *
     * @return $this
     */
    public function limit(int $limit): static {
        $this->addAttribute('limit', $limit);
        return $this;
    }
}
