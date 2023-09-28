<?php

namespace uzdevid\telegram\bot\exceptions;

class InvalidCallException extends \BadMethodCallException {
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string {
        return 'Invalid Call';
    }
}