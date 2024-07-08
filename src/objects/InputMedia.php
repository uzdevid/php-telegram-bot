<?php

namespace uzdevid\telegram\bot\objects;

use JsonException;
use uzdevid\telegram\bot\Component;
use uzdevid\telegram\bot\message\messages\entity\MessageEntityInterface;

abstract class InputMedia extends Component {
    protected static string $__type = 'type';
    protected static string $__media = 'media';
    protected static string $__caption = 'caption';
    protected static string $__pars_mode = 'parse_mode';
    protected static string $__caption_entities = 'caption_entities';

    /**
     * @param string $media
     * @return $this
     */
    public function media(string $media): static {
        $this->addAttribute(self::$__media, $media);
        return $this;
    }

    /**
     * @param string $caption
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute(self::$__caption, $caption);
        return $this;
    }

    /**
     * @param string $parseMode
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute(self::$__pars_mode, $parseMode);
        return $this;
    }

    /**
     * @param MessageEntityInterface $entity
     * @return $this
     */
    public function addCaptionEntity(MessageEntityInterface $entity): static {
        $this->pushAttribute(self::$__caption_entities, $entity);
        return $this;
    }

    /**
     * @throws JsonException
     */
    public function __toString() {
        $json = json_encode($this->attributes, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);

        if ($json === false) {
            throw new JsonException('Attributes not encoded to json');
        }

        return $json;
    }
}