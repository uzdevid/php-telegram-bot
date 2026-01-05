<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply;

use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ButtonInterface;
use UzDevid\Telegram\Bot\Type\WebAppInfo;

class ReplyButton implements ButtonInterface {
    use AttributeContainer;

    /**
     * @param string $text
     *
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * @param bool $requestContact
     *
     * @return $this
     */
    public function requestContact(bool $requestContact = true): static {
        $this->addAttribute('request_contact', $requestContact);
        return $this;
    }

    /**
     * @param bool $requestLocation
     *
     * @return $this
     */
    public function requestLocation(bool $requestLocation = true): static {
        $this->addAttribute('request_location', $requestLocation);
        return $this;
    }

    /**
     * @param WebAppInfo $webAppInfo
     * @return $this
     */
    public function webApp(WebAppInfo $webAppInfo): static {
        $this->addAttribute('web_app', $webAppInfo);
        return $this;
    }
}