<?php

namespace uzdevid\telegram\bot;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;

/**
 * Class BaseBot
 *
 * @package uzdevid\telegram\bot
 *
 * @property string $token
 * @property int $chatId
 * @property string $username
 * @property Client $httpClient
 */
class BaseBot extends Component {
    protected static string $apiUrl = 'https://api.telegram.org/bot';

    private string $_token;
    private int $_chatId;
    private string $_username;
    private ClientInterface $_httpClient;

    /**
     * @return string
     */
    public function getToken(): string {
        return $this->_token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void {
        $this->_token = $token;
    }

    /**
     * @param string $token
     */
    public function token(string $token): static {
        $this->_token = $token;
        return $this;
    }

    public function __isset($name) {
        $privateName = '_' . $name;

        return isset($this->$privateName);
    }

    /**
     * @return bool
     */
    protected function issetToken(): bool {
        return isset($this->_token);
    }

    /**
     * @return int
     */
    public function getChatId(): int {
        return $this->_chatId;
    }

    /**
     * @param int $chatId
     */
    public function setChatId(int $chatId): void {
        $this->_chatId = $chatId;
    }

    /**
     * @param int $chatId
     *
     * @return static
     */
    public function chatId(int $chatId): static {
        $this->_chatId = $chatId;
        return $this;
    }

    /**
     * @return bool
     */
    protected function issetChatId(): bool {
        return isset($this->_chatId);
    }

    /**
     * @return string
     */
    public function getUsername(): string {
        return $this->_username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void {
        $this->_username = $username;
    }

    /**
     * @param string $username
     *
     * @return static
     */
    public function username(string $username): static {
        $this->_username = $username;
        return $this;
    }

    /**
     * @return bool
     */
    protected function issetUsername(): bool {
        return isset($this->_username);
    }

    /**
     * @return int|string
     */
    protected function chatIdOrUsername(): int|string {
        if ($this->issetUsername()) {
            return $this->username;
        }

        return $this->chatId;
    }

    /**
     * @return ClientInterface
     */
    public function getHttpClient(): ClientInterface {
        if (!isset($this->_httpClient)) {
            $this->httpClient = new Client();
        }

        return $this->_httpClient;
    }

    /**
     * @param ClientInterface $httpClient
     */
    public function setHttpClient(ClientInterface $httpClient): void {
        $this->_httpClient = $httpClient;
    }
}