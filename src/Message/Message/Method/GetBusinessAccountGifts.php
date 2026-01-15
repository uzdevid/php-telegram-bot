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
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "getBusinessAccountGifts";
    }

    /**
     * @param bool $excludeUnsaved
     *
     * @return $this
     */
    public function excludeUnsaved(bool $excludeUnsaved): static {
        $this->addAttribute('exclude_unsaved', $excludeUnsaved);
        return $this;
    }

    /**
     * @param bool $excludeSaved
     *
     * @return $this
     */
    public function excludeSaved(bool $excludeSaved): static {
        $this->addAttribute('exclude_saved', $excludeSaved);
        return $this;
    }

    /**
     * @param bool $excludeUnlimited
     *
     * @return $this
     */
    public function excludeUnlimited(bool $excludeUnlimited): static {
        $this->addAttribute('exclude_unlimited', $excludeUnlimited);
        return $this;
    }

    /**
     * @param bool $excludeLimitedUpgradable
     *
     * @return $this
     */
    public function excludeLimitedUpgradable(bool $excludeLimitedUpgradable): static {
        $this->addAttribute('exclude_limited_upgradable', $excludeLimitedUpgradable);
        return $this;
    }

    /**
     * @param bool $excludeLimitedNonUpgradable
     *
     * @return $this
     */
    public function excludeLimitedNonUpgradable(bool $excludeLimitedNonUpgradable): static {
        $this->addAttribute('exclude_limited_non_upgradable', $excludeLimitedNonUpgradable);
        return $this;
    }

    /**
     * @param bool $excludeUnique
     *
     * @return $this
     */
    public function excludeUnique(bool $excludeUnique): static {
        $this->addAttribute('exclude_unique', $excludeUnique);
        return $this;
    }

    /**
     * @param bool $excludeFromBlockchain
     *
     * @return $this
     */
    public function excludeFromBlockchain(bool $excludeFromBlockchain): static {
        $this->addAttribute('exclude_from_blockchain', $excludeFromBlockchain);
        return $this;
    }

    /**
     * @param bool $sortByPrice
     *
     * @return $this
     */
    public function sortByPrice(bool $sortByPrice): static {
        $this->addAttribute('sort_by_price', $sortByPrice);
        return $this;
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function offset(string $offset): static {
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
}
