<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultCachedAudio
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
 *
 * Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultCachedAudio extends Type {
    /**
     * @var string Type of the result, must be audio
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string A valid file identifier for the audio file
     */
    public string $audioFileId;

    /**
     * @var string|null Optional. Caption, 0-1024 characters after entities parsing
     */
    public string|null $caption;

    /**
     * @var string|null Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     */
    public string|null $parseMode;

    /**
     * @var MessageEntity[]|null Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     */
    public array|null $captionEntities;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the audio
     */
    public InputMessageContent|null $inputMessageContent;
}
