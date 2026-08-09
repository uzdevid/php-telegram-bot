<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ChatMemberAdministrator;
use UzDevid\Telegram\Bot\Type\ChatMemberBanned;
use UzDevid\Telegram\Bot\Type\ChatMemberLeft;
use UzDevid\Telegram\Bot\Type\ChatMemberMember;
use UzDevid\Telegram\Bot\Type\ChatMemberOwner;
use UzDevid\Telegram\Bot\Type\ChatMemberRestricted;
use Yiisoft\Hydrator\Hydrator;

/**
 * Use this method to get information about a member of a chat. The method is only guaranteed to
 * work for other users if the bot is an administrator in the chat. Returns a ChatMember object on
 * success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#getchatmember
 */
class GetChatMember extends Method implements MethodInterface {
    /**
     * Creates a new GetChatMember method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'getChatMember';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup or channel in the
     * format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup or channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Hydrates the successful Bot API response into the corresponding return type instance.
     *
     * @param array $data raw Telegram Bot API response payload
     *
     * @return
     *   ChatMemberMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned
     */
    public function response(array $data): ChatMemberMember|ChatMemberOwner|ChatMemberAdministrator|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned {
        $class = match ($data['result']['status']) {
            'member' => ChatMemberMember::class,
            'creator' => ChatMemberOwner::class,
            'administrator' => ChatMemberAdministrator::class,
            'restricted' => ChatMemberRestricted::class,
            'left' => ChatMemberLeft::class,
            'banned' => ChatMemberBanned::class
        };

        return (new Hydrator())->create($class, $data['result']);
    }
}
