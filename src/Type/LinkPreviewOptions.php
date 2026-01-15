<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type LinkPreviewOptions
 *
 * @link https://core.telegram.org/bots/api#linkpreviewoptions
 *
 * Describes the options used for link preview generation.
 */
class LinkPreviewOptions extends Type {
    /**
     * @var bool|null Optional. True, if the link preview is disabled
     */
    public bool|null $isDisabled;

    /**
     * @var string|null Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
     */
    public string|null $url;

    /**
     * @var bool|null Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     */
    public bool|null $preferSmallMedia;

    /**
     * @var bool|null Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     */
    public bool|null $preferLargeMedia;

    /**
     * @var bool|null Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
     */
    public bool|null $showAboveText;
}
