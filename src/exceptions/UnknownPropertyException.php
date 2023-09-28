<?php

namespace uzdevid\telegram\bot\exceptions;

class UnknownPropertyException extends \Exception {
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string {
        return 'Unknown Property';
    }
}