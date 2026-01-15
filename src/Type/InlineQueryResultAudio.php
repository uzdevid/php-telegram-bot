<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultAudio
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultaudio
 *
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultAudio extends Type {
    /**
     * @var string Type of the result, must be audio
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string A valid URL for the audio file
     */
    public string $audioUrl;

    /**
     * @var string Title
     */
    public string $title;

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
     * @var string|null Optional. Performer
     */
    public string|null $performer;

    /**
     * @var int|null Optional. Audio duration in seconds
     */
    public int|null $audioDuration;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the audio
     */
    public InputMessageContent|null $inputMessageContent;
}
