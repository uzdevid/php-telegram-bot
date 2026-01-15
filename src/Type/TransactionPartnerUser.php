<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TransactionPartnerUser
 *
 * @link https://core.telegram.org/bots/api#transactionpartneruser
 *
 * Describes a transaction with a user.
 */
class TransactionPartnerUser extends Type {
    /**
     * @var string Type of the transaction partner, always “user”
     */
    public string $type;

    /**
     * @var string Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
     */
    public string $transactionType;

    /**
     * @var User Information about the user
     */
    public User $user;

    /**
     * @var AffiliateInfo|null Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
     */
    public AffiliateInfo|null $affiliate;

    /**
     * @var string|null Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
     */
    public string|null $invoicePayload;

    /**
     * @var int|null Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
     */
    public int|null $subscriptionPeriod;

    /**
     * @var PaidMedia[]|null Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
     */
    public array|null $paidMedia;

    /**
     * @var string|null Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
     */
    public string|null $paidMediaPayload;

    /**
     * @var Gift|null Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
     */
    public Gift|null $gift;

    /**
     * @var int|null Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
     */
    public int|null $premiumSubscriptionDuration;
}
