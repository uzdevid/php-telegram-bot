<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetBusinessAccountGifts
 *
 * Returns the gifts received and owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns OwnedGifts on success.
 */
class GetBusinessAccountGifts extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "getBusinessAccountGifts";
    }

    /**
     * @param bool $excludeUnsaved Pass True to exclude gifts that aren't saved to the account's profile page
     *
     * @return $this
     */
    public function excludeUnsaved(bool $excludeUnsaved): static {
        $this->addAttribute('exclude_unsaved', $excludeUnsaved);
        return $this;
    }

    /**
     * @param bool $excludeSaved Pass True to exclude gifts that are saved to the account's profile page
     *
     * @return $this
     */
    public function excludeSaved(bool $excludeSaved): static {
        $this->addAttribute('exclude_saved', $excludeSaved);
        return $this;
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
     * @param bool $excludeUnique Pass True to exclude unique gifts
     *
     * @return $this
     */
    public function excludeUnique(bool $excludeUnique): static {
        $this->addAttribute('exclude_unique', $excludeUnique);
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
     * @param bool $sortByPrice Pass True to sort results by gift price instead of send date. Sorting is applied before pagination.
     *
     * @return $this
     */
    public function sortByPrice(bool $sortByPrice): static {
        $this->addAttribute('sort_by_price', $sortByPrice);
        return $this;
    }

    /**
     * @param string $offset Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
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
