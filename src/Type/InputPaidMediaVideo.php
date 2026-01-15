<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputPaidMediaVideo
 *
 * @link https://core.telegram.org/bots/api#inputpaidmediavideo
 *
 * The paid media to send is a video.
 */
class InputPaidMediaVideo extends Type {
    /**
     * @var string Type of the media, must be video
     */
    public string $type;

    /**
     * @var string File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     */
    public string $media;

    /**
     * @var string|null Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     */
    public string|null $thumbnail;

    /**
     * @var string|null Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     */
    public string|null $cover;

    /**
     * @var int|null Optional. Start timestamp for the video in the message
     */
    public int|null $startTimestamp;

    /**
     * @var int|null Optional. Video width
     */
    public int|null $width;

    /**
     * @var int|null Optional. Video height
     */
    public int|null $height;

    /**
     * @var int|null Optional. Video duration in seconds
     */
    public int|null $duration;

    /**
     * @var bool|null Optional. Pass True if the uploaded video is suitable for streaming
     */
    public bool|null $supportsStreaming;
}
