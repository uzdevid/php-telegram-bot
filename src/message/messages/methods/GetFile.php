<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

class GetFile extends Method implements MethodInterface {
    protected static string $__file_id = 'file_id';

    public function __construct(string $__file_id, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__file_id, $__file_id);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getFile";
    }
}