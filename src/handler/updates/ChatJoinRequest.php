<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\BaseObject;
use uzdevid\telegram\bot\handler\RequestInterface;

class ChatJoinRequest extends BaseObject implements RequestInterface {
    /**
     * @return string
     */
    public static function objectName(): string {
        return 'chat_join_request';
    }
}