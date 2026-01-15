<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BusinessBotRights
 *
 * @link https://core.telegram.org/bots/api#businessbotrights
 *
 * Represents the rights of a business bot.
 */
class BusinessBotRights extends Type {
    /**
     * @var bool|null Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     */
    public bool|null $canReply;

    /**
     * @var bool|null Optional. True, if the bot can mark incoming private messages as read
     */
    public bool|null $canReadMessages;

    /**
     * @var bool|null Optional. True, if the bot can delete messages sent by the bot
     */
    public bool|null $canDeleteSentMessages;

    /**
     * @var bool|null Optional. True, if the bot can delete all private messages in managed chats
     */
    public bool|null $canDeleteAllMessages;

    /**
     * @var bool|null Optional. True, if the bot can edit the first and last name of the business account
     */
    public bool|null $canEditName;

    /**
     * @var bool|null Optional. True, if the bot can edit the bio of the business account
     */
    public bool|null $canEditBio;

    /**
     * @var bool|null Optional. True, if the bot can edit the profile photo of the business account
     */
    public bool|null $canEditProfilePhoto;

    /**
     * @var bool|null Optional. True, if the bot can edit the username of the business account
     */
    public bool|null $canEditUsername;

    /**
     * @var bool|null Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
     */
    public bool|null $canChangeGiftSettings;

    /**
     * @var bool|null Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
     */
    public bool|null $canViewGiftsAndStars;

    /**
     * @var bool|null Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
     */
    public bool|null $canConvertGiftsToStars;

    /**
     * @var bool|null Optional. True, if the bot can transfer and upgrade gifts owned by the business account
     */
    public bool|null $canTransferAndUpgradeGifts;

    /**
     * @var bool|null Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
     */
    public bool|null $canTransferStars;

    /**
     * @var bool|null Optional. True, if the bot can post, edit and delete stories on behalf of the business account
     */
    public bool|null $canManageStories;
}
