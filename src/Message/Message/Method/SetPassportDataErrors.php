<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Informs a user that some of the Telegram Passport elements they provided contains errors. The
 * user will not be able to re-submit their Passport to you until the errors are fixed (the contents
 * of the field for which you returned the error must change). Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'errors' fields and
 * dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#setpassportdataerrors
 */
class SetPassportDataErrors extends Method implements MethodInterface {
    /**
     * Creates a new SetPassportDataErrors method and sets the required 'user_id' and 'errors'
     * fields.
     *
     * @param int $userId User identifier
     * @param array $errors A JSON-serialized Array describing the errors
     */
    public function __construct(int $userId, array $errors) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('errors', $errors);
    }

    public function methodName(): string {
        return 'setPassportDataErrors';
    }
}
