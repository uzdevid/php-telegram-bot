<?php

namespace UzDevid\Telegram\Bot\Message\Message;

use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;

/**
 * Base class shared by every generated Bot API method.
 *
 * NOTE: Method-specific builder methods (messageThreadId, disableNotification,
 * replyMarkup, reply parameters, etc.) intentionally live only in the concrete
 * subclasses (e.g. SendMessage, EditMessageText), since parameter names, types
 * and defaults differ per endpoint per the official Bot API documentation.
 * Declaring them here as well previously caused PHP Fatal errors ("Declaration
 * ... must be compatible with ...") in dozens of subclasses that override them
 * with an incompatible signature.
 *
 * @property array $payload
 */
class Method {
    use AttributeContainer;

    /**
     * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     *
     * @param string $name
     * @param MessageEntityInterface $entity
     *
     * @return static
     */
    public function addMessageEntity(string $name, MessageEntityInterface $entity): static {
        $this->pushAttribute($name, $entity);
        return $this;
    }

    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }

    /**
     * @param array $data
     *
     * @return string
     */
    public function response(array $data): mixed {
        return $data;
    }
}
