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

class GetChatMember extends Method implements MethodInterface {
    /**
     * @param int $userId
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getChatMember";
    }

    /**
     * @param array $data
     * @return ChatMemberMember
     */
    public function response(array $data): ChatMemberMember {
        $class = match ($data['result']['status']) {
            'member' => ChatMemberMember::class,
            'owner' => ChatMemberOwner::class,
            'administrator' => ChatMemberAdministrator::class,
            'restricted' => ChatMemberRestricted::class,
            'left' => ChatMemberLeft::class,
            'banned' => ChatMemberBanned::class
        };

        return (new Hydrator())->create($class, $data['result']);
    }
}