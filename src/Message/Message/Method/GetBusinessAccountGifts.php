<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Returns the gifts received and owned by a managed business account. Requires the
 * can_view_gifts_and_stars business bot right. Returns OwnedGifts on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' field, then
 * chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#getbusinessaccountgifts
 */
class GetBusinessAccountGifts extends Method implements MethodInterface {
    /**
     * Creates a new GetBusinessAccountGifts method and sets the required 'business_connection_id'
     * field.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return 'getBusinessAccountGifts';
    }

    /**
     * Pass True to exclude gifts that aren't saved to the account's profile page
     *
     * @param bool $excludeUnsaved Pass True to exclude gifts that aren't saved to the account's
     *   profile page
     *
     * @return $this
     */
    public function excludeUnsaved(bool $excludeUnsaved = true): static {
        $this->addAttribute('exclude_unsaved', $excludeUnsaved);
        return $this;
    }

    /**
     * Pass True to exclude gifts that are saved to the account's profile page
     *
     * @param bool $excludeSaved Pass True to exclude gifts that are saved to the account's profile
     *   page
     *
     * @return $this
     */
    public function excludeSaved(bool $excludeSaved = true): static {
        $this->addAttribute('exclude_saved', $excludeSaved);
        return $this;
    }

    /**
     * Pass True to exclude gifts that can be purchased an unlimited number of times
     *
     * @param bool $excludeUnlimited Pass True to exclude gifts that can be purchased an unlimited
     *   number of times
     *
     * @return $this
     */
    public function excludeUnlimited(bool $excludeUnlimited = true): static {
        $this->addAttribute('exclude_unlimited', $excludeUnlimited);
        return $this;
    }

    /**
     * Pass True to exclude gifts that can be purchased a limited number of times and can be
     * upgraded to unique
     *
     * @param bool $excludeLimitedUpgradable Pass True to exclude gifts that can be purchased a
     *   limited number of times and can be upgraded to unique
     *
     * @return $this
     */
    public function excludeLimitedUpgradable(bool $excludeLimitedUpgradable = true): static {
        $this->addAttribute('exclude_limited_upgradable', $excludeLimitedUpgradable);
        return $this;
    }

    /**
     * Pass True to exclude gifts that can be purchased a limited number of times and can't be
     * upgraded to unique
     *
     * @param bool $excludeLimitedNonUpgradable Pass True to exclude gifts that can be purchased a
     *   limited number of times and can't be upgraded to unique
     *
     * @return $this
     */
    public function excludeLimitedNonUpgradable(bool $excludeLimitedNonUpgradable = true): static {
        $this->addAttribute('exclude_limited_non_upgradable', $excludeLimitedNonUpgradable);
        return $this;
    }

    /**
     * Pass True to exclude unique gifts
     *
     * @param bool $excludeUnique Pass True to exclude unique gifts
     *
     * @return $this
     */
    public function excludeUnique(bool $excludeUnique = true): static {
        $this->addAttribute('exclude_unique', $excludeUnique);
        return $this;
    }

    /**
     * Pass True to exclude gifts that were assigned from the TON blockchain and can't be resold or
     * transferred in Telegram
     *
     * @param bool $excludeFromBlockchain Pass True to exclude gifts that were assigned from the TON
     *   blockchain and can't be resold or transferred in Telegram
     *
     * @return $this
     */
    public function excludeFromBlockchain(bool $excludeFromBlockchain = true): static {
        $this->addAttribute('exclude_from_blockchain', $excludeFromBlockchain);
        return $this;
    }

    /**
     * Pass True to sort results by gift price instead of send date. Sorting is applied before
     * pagination.
     *
     * @param bool $sortByPrice Pass True to sort results by gift price instead of send date.
     *   Sorting is applied before pagination.
     *
     * @return $this
     */
    public function sortByPrice(bool $sortByPrice = true): static {
        $this->addAttribute('sort_by_price', $sortByPrice);
        return $this;
    }

    /**
     * Offset of the first entry to return as received from the previous request; use empty string
     * to get the first chunk of results
     *
     * @param string $offset Offset of the first entry to return as received from the previous
     *   request; use empty string to get the first chunk of results
     *
     * @return $this
     */
    public function offset(string $offset): static {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * The maximum number of gifts to be returned; 1-100. Defaults to 100.
     *
     * @param int $limit The maximum number of gifts to be returned; 1-100. Defaults to 100.
     *
     * @return $this
     */
    public function limit(int $limit): static {
        $this->addAttribute('limit', $limit);
        return $this;
    }
}
