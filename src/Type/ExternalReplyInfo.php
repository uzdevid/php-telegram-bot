<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ExternalReplyInfo
 *
 * @link https://core.telegram.org/bots/api#externalreplyinfo
 *
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 */
class ExternalReplyInfo extends Type {
    /**
     * @var MessageOrigin Origin of the message replied to by the given message
     */
    public MessageOrigin $origin;

    /**
     * @var Chat|null Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     */
    public Chat|null $chat;

    /**
     * @var int|null Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     */
    public int|null $messageId;

    /**
     * @var LinkPreviewOptions|null Optional. Options used for link preview generation for the original message, if it is a text message
     */
    public LinkPreviewOptions|null $linkPreviewOptions;

    /**
     * @var Animation|null Optional. Message is an animation, information about the animation
     */
    public Animation|null $animation;

    /**
     * @var Audio|null Optional. Message is an audio file, information about the file
     */
    public Audio|null $audio;

    /**
     * @var Document|null Optional. Message is a general file, information about the file
     */
    public Document|null $document;

    /**
     * @var PaidMediaInfo|null Optional. Message contains paid media; information about the paid media
     */
    public PaidMediaInfo|null $paidMedia;

    /**
     * @var PhotoSize[]|null Optional. Message is a photo, available sizes of the photo
     */
    public array|null $photo;

    /**
     * @var Sticker|null Optional. Message is a sticker, information about the sticker
     */
    public Sticker|null $sticker;

    /**
     * @var Story|null Optional. Message is a forwarded story
     */
    public Story|null $story;

    /**
     * @var Video|null Optional. Message is a video, information about the video
     */
    public Video|null $video;

    /**
     * @var VideoNote|null Optional. Message is a video note, information about the video message
     */
    public VideoNote|null $videoNote;

    /**
     * @var Voice|null Optional. Message is a voice message, information about the file
     */
    public Voice|null $voice;

    /**
     * @var bool|null Optional. True, if the message media is covered by a spoiler animation
     */
    public bool|null $hasMediaSpoiler;

    /**
     * @var Checklist|null Optional. Message is a checklist
     */
    public Checklist|null $checklist;

    /**
     * @var Contact|null Optional. Message is a shared contact, information about the contact
     */
    public Contact|null $contact;

    /**
     * @var Dice|null Optional. Message is a dice with random value
     */
    public Dice|null $dice;

    /**
     * @var Game|null Optional. Message is a game, information about the game. More about games »
     */
    public Game|null $game;

    /**
     * @var Giveaway|null Optional. Message is a scheduled giveaway, information about the giveaway
     */
    public Giveaway|null $giveaway;

    /**
     * @var GiveawayWinners|null Optional. A giveaway with public winners was completed
     */
    public GiveawayWinners|null $giveawayWinners;

    /**
     * @var Invoice|null Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     */
    public Invoice|null $invoice;

    /**
     * @var Location|null Optional. Message is a shared location, information about the location
     */
    public Location|null $location;

    /**
     * @var Poll|null Optional. Message is a native poll, information about the poll
     */
    public Poll|null $poll;

    /**
     * @var Venue|null Optional. Message is a venue, information about the venue
     */
    public Venue|null $venue;
}
