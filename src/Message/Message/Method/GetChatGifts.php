<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Returns the gifts owned by a chat. Returns OwnedGifts on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#getchatgifts
 */
class GetChatGifts extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getChatGifts';
    }

    /**
     * Unique identifier for the target chat or username of the target channel in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Pass True to exclude gifts that aren't saved to the chat's profile page. Always True , unless
     * the bot has the can_post_messages administrator right in the channel.
     *
     * @param bool $excludeUnsaved Pass True to exclude gifts that aren't saved to the chat's
     *   profile page. Always True , unless the bot has the can_post_messages administrator right in
     *   the channel.
     *
     * @return $this
     */
    public function excludeUnsaved(bool $excludeUnsaved = true): static {
        $this->addAttribute('exclude_unsaved', $excludeUnsaved);
        return $this;
    }

    /**
     * Pass True to exclude gifts that are saved to the chat's profile page. Always False , unless
     * the bot has the can_post_messages administrator right in the channel.
     *
     * @param bool $excludeSaved Pass True to exclude gifts that are saved to the chat's profile
     *   page. Always False , unless the bot has the can_post_messages administrator right in the
     *   channel.
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
     * Offset of the first entry to return as received from the previous request; use an empty
     * string to get the first chunk of results
     *
     * @param string $offset Offset of the first entry to return as received from the previous
     *   request; use an empty string to get the first chunk of results
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
