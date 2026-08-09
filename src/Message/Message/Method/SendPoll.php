<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to send a native poll. On success, the sent Message is returned.
 *
 * Typical usage: instantiate the method with the required 'question' and 'options' fields, then
 * chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#sendpoll
 */
class SendPoll extends Method implements MethodInterface {
    /**
     * Creates a new SendPoll method and sets the required 'question' and 'options' fields.
     *
     * @param string $question Poll question, 1-300 characters
     * @param array $options A JSON-serialized list of 1-12 answer options
     */
    public function __construct(string $question, array $options) {
        parent::__construct();
        $this->addAttribute('question', $question);
        $this->addAttribute('options', $options);
    }

    public function methodName(): string {
        return 'sendPoll';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username . Polls can't be sent to channel direct messages chats.
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username . Polls can't be sent to channel direct
     *   messages chats.
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and
     * private chats of bots with forum topic mode enabled only
     *
     * @param int $messageThreadId Unique identifier for the target message thread (topic) of a
     *   forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * Mode for parsing entities in the question. See formatting options for more details.
     * Currently, only custom emoji entities are allowed.
     *
     * @param string $questionParseMode Mode for parsing entities in the question. See formatting
     *   options for more details. Currently, only custom emoji entities are allowed.
     *
     * @return $this
     */
    public function questionParseMode(string $questionParseMode): static {
        $this->addAttribute('question_parse_mode', $questionParseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in the poll question. It can be
     * specified instead of question_parse_mode .
     *
     * @param array $questionEntities A JSON-serialized list of special entities that appear in the
     *   poll question. It can be specified instead of question_parse_mode .
     *
     * @return $this
     */
    public function questionEntities(array $questionEntities): static {
        $this->addAttribute('question_entities', $questionEntities);
        return $this;
    }

    /**
     * Adds one item to the question_entities list. A JSON-serialized list of special entities that
     * appear in the poll question. It can be specified instead of question_parse_mode .
     *
     * @param MessageEntityInterface $questionEntity Adds one item to the question_entities list. A
     *   JSON-serialized list of special entities that appear in the poll question. It can be
     *   specified instead of question_parse_mode .
     *
     * @return $this
     */
    public function addQuestionEntity(MessageEntityInterface $questionEntity): static {
        $this->addMessageEntity('question_entities', $questionEntity);
        return $this;
    }

    /**
     * True , if the poll needs to be anonymous, defaults to True
     *
     * @param bool $isAnonymous True , if the poll needs to be anonymous, defaults to True
     *
     * @return $this
     */
    public function isAnonymous(bool $isAnonymous = true): static {
        $this->addAttribute('is_anonymous', $isAnonymous);
        return $this;
    }

    /**
     * Poll type, “quiz” or “regular”, defaults to “regular”
     *
     * @param string $type Poll type, “quiz” or “regular”, defaults to “regular”
     *
     * @return $this
     */
    public function type(string $type): static {
        $this->addAttribute('type', $type);
        return $this;
    }

    /**
     * Pass True if the poll allows multiple answers, defaults to False
     *
     * @param bool $allowsMultipleAnswers Pass True if the poll allows multiple answers, defaults to
     *   False
     *
     * @return $this
     */
    public function allowsMultipleAnswers(bool $allowsMultipleAnswers = true): static {
        $this->addAttribute('allows_multiple_answers', $allowsMultipleAnswers);
        return $this;
    }

    /**
     * Pass True if the poll allows to change chosen answer options, defaults to False for quizzes
     * and to True for regular polls
     *
     * @param bool $allowsRevoting Pass True if the poll allows to change chosen answer options,
     *   defaults to False for quizzes and to True for regular polls
     *
     * @return $this
     */
    public function allowsRevoting(bool $allowsRevoting = true): static {
        $this->addAttribute('allows_revoting', $allowsRevoting);
        return $this;
    }

    /**
     * Pass True if the poll options must be shown in random order
     *
     * @param bool $shuffleOptions Pass True if the poll options must be shown in random order
     *
     * @return $this
     */
    public function shuffleOptions(bool $shuffleOptions = true): static {
        $this->addAttribute('shuffle_options', $shuffleOptions);
        return $this;
    }

    /**
     * Pass True if answer options can be added to the poll after creation; not supported for
     * anonymous polls and quizzes
     *
     * @param bool $allowAddingOptions Pass True if answer options can be added to the poll after
     *   creation; not supported for anonymous polls and quizzes
     *
     * @return $this
     */
    public function allowAddingOptions(bool $allowAddingOptions = true): static {
        $this->addAttribute('allow_adding_options', $allowAddingOptions);
        return $this;
    }

    /**
     * Pass True if poll results must be shown only after the poll closes
     *
     * @param bool $hideResultsUntilCloses Pass True if poll results must be shown only after the
     *   poll closes
     *
     * @return $this
     */
    public function hideResultsUntilCloses(bool $hideResultsUntilCloses = true): static {
        $this->addAttribute('hide_results_until_closes', $hideResultsUntilCloses);
        return $this;
    }

    /**
     * Pass True if voting is limited to users who have been members of the chat where the poll is
     * being sent for more than 24 hours; for channel chats only
     *
     * @param bool $membersOnly Pass True if voting is limited to users who have been members of the
     *   chat where the poll is being sent for more than 24 hours; for channel chats only
     *
     * @return $this
     */
    public function membersOnly(bool $membersOnly = true): static {
        $this->addAttribute('members_only', $membersOnly);
        return $this;
    }

    /**
     * A JSON-serialized list of 0-12 two-letter ISO 3166-1 alpha-2 country codes indicating the
     * countries from which users can vote in the poll; for channel chats only. Use “FT” as a
     * country code to allow users with anonymous numbers to vote. If omitted or empty, then users
     * from any country can participate in the poll.
     *
     * @param array $countryCodes A JSON-serialized list of 0-12 two-letter ISO 3166-1 alpha-2
     *   country codes indicating the countries from which users can vote in the poll; for channel
     *   chats only. Use “FT” as a country code to allow users with anonymous numbers to vote. If
     *   omitted or empty, then users from any country can participate in the poll.
     *
     * @return $this
     */
    public function countryCodes(array $countryCodes): static {
        $this->addAttribute('country_codes', $countryCodes);
        return $this;
    }

    /**
     * Adds one item to the country_codes list. A JSON-serialized list of 0-12 two-letter ISO 3166-1
     * alpha-2 country codes indicating the countries from which users can vote in the poll; for
     * channel chats only. Use “FT” as a country code to allow users with anonymous numbers to vote.
     * If omitted or empty, then users from any country can participate in the poll.
     *
     * @param string $countryCode Adds one item to the country_codes list. A JSON-serialized list of
     *   0-12 two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which users
     *   can vote in the poll; for channel chats only. Use “FT” as a country code to allow users
     *   with anonymous numbers to vote. If omitted or empty, then users from any country can
     *   participate in the poll.
     *
     * @return $this
     */
    public function addCountryCode(string $countryCode): static {
        $this->pushAttribute('country_codes', $countryCode);
        return $this;
    }

    /**
     * A JSON-serialized list of monotonically increasing 0-based identifiers of the correct answer
     * options, required for polls in quiz mode
     *
     * @param array $correctOptionIds A JSON-serialized list of monotonically increasing 0-based
     *   identifiers of the correct answer options, required for polls in quiz mode
     *
     * @return $this
     */
    public function correctOptionIds(array $correctOptionIds): static {
        $this->addAttribute('correct_option_ids', $correctOptionIds);
        return $this;
    }

    /**
     * Adds one item to the correct_option_ids list. A JSON-serialized list of monotonically
     * increasing 0-based identifiers of the correct answer options, required for polls in quiz mode
     *
     * @param int $correctOptionId Adds one item to the correct_option_ids list. A JSON-serialized
     *   list of monotonically increasing 0-based identifiers of the correct answer options,
     *   required for polls in quiz mode
     *
     * @return $this
     */
    public function addCorrectOptionId(int $correctOptionId): static {
        $this->pushAttribute('correct_option_ids', $correctOptionId);
        return $this;
    }

    /**
     * Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a
     * quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     *
     * @param string $explanation Text that is shown when a user chooses an incorrect answer or taps
     *   on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after
     *   entities parsing
     *
     * @return $this
     */
    public function explanation(string $explanation): static {
        $this->addAttribute('explanation', $explanation);
        return $this;
    }

    /**
     * Mode for parsing entities in the explanation. See formatting options for more details.
     *
     * @param string $explanationParseMode Mode for parsing entities in the explanation. See
     *   formatting options for more details.
     *
     * @return $this
     */
    public function explanationParseMode(string $explanationParseMode): static {
        $this->addAttribute('explanation_parse_mode', $explanationParseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in the poll explanation. It can be
     * specified instead of explanation_parse_mode .
     *
     * @param array $explanationEntities A JSON-serialized list of special entities that appear in
     *   the poll explanation. It can be specified instead of explanation_parse_mode .
     *
     * @return $this
     */
    public function explanationEntities(array $explanationEntities): static {
        $this->addAttribute('explanation_entities', $explanationEntities);
        return $this;
    }

    /**
     * Adds one item to the explanation_entities list. A JSON-serialized list of special entities
     * that appear in the poll explanation. It can be specified instead of explanation_parse_mode .
     *
     * @param MessageEntityInterface $explanationEntity Adds one item to the explanation_entities
     *   list. A JSON-serialized list of special entities that appear in the poll explanation. It
     *   can be specified instead of explanation_parse_mode .
     *
     * @return $this
     */
    public function addExplanationEntity(MessageEntityInterface $explanationEntity): static {
        $this->addMessageEntity('explanation_entities', $explanationEntity);
        return $this;
    }

    /**
     * Media added to the quiz explanation
     *
     * @param mixed $explanationMedia Media added to the quiz explanation
     *
     * @return $this
     */
    public function explanationMedia(mixed $explanationMedia): static {
        $this->addAttribute('explanation_media', $explanationMedia);
        return $this;
    }

    /**
     * Amount of time in seconds the poll will be active after creation, 5-2628000. Can't be used
     * together with close_date .
     *
     * @param int $openPeriod Amount of time in seconds the poll will be active after creation,
     *   5-2628000. Can't be used together with close_date .
     *
     * @return $this
     */
    public function openPeriod(int $openPeriod): static {
        $this->addAttribute('open_period', $openPeriod);
        return $this;
    }

    /**
     * Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5
     * and no more than 2628000 seconds in the future. Can't be used together with open_period .
     *
     * @param int $closeDate Point in time (Unix timestamp) when the poll will be automatically
     *   closed. Must be at least 5 and no more than 2628000 seconds in the future. Can't be used
     *   together with open_period .
     *
     * @return $this
     */
    public function closeDate(int $closeDate): static {
        $this->addAttribute('close_date', $closeDate);
        return $this;
    }

    /**
     * Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
     *
     * @param bool $isClosed Pass True if the poll needs to be immediately closed. This can be
     *   useful for poll preview.
     *
     * @return $this
     */
    public function isClosed(bool $isClosed = true): static {
        $this->addAttribute('is_closed', $isClosed);
        return $this;
    }

    /**
     * Description of the poll to be sent, 0-1024 characters after entities parsing
     *
     * @param string $description Description of the poll to be sent, 0-1024 characters after
     *   entities parsing
     *
     * @return $this
     */
    public function description(string $description): static {
        $this->addAttribute('description', $description);
        return $this;
    }

    /**
     * Mode for parsing entities in the poll description. See formatting options for more details.
     *
     * @param string $descriptionParseMode Mode for parsing entities in the poll description. See
     *   formatting options for more details.
     *
     * @return $this
     */
    public function descriptionParseMode(string $descriptionParseMode): static {
        $this->addAttribute('description_parse_mode', $descriptionParseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in the poll description, which can be
     * specified instead of description_parse_mode
     *
     * @param array $descriptionEntities A JSON-serialized list of special entities that appear in
     *   the poll description, which can be specified instead of description_parse_mode
     *
     * @return $this
     */
    public function descriptionEntities(array $descriptionEntities): static {
        $this->addAttribute('description_entities', $descriptionEntities);
        return $this;
    }

    /**
     * Adds one item to the description_entities list. A JSON-serialized list of special entities
     * that appear in the poll description, which can be specified instead of description_parse_mode
     *
     * @param MessageEntityInterface $descriptionEntity Adds one item to the description_entities
     *   list. A JSON-serialized list of special entities that appear in the poll description, which
     *   can be specified instead of description_parse_mode
     *
     * @return $this
     */
    public function addDescriptionEntity(MessageEntityInterface $descriptionEntity): static {
        $this->addMessageEntity('description_entities', $descriptionEntity);
        return $this;
    }

    /**
     * Media added to the poll description
     *
     * @param mixed $media Media added to the poll description
     *
     * @return $this
     */
    public function media(mixed $media): static {
        $this->addAttribute('media', $media);
        return $this;
    }

    /**
     * Sends the message silently . Users will receive a notification with no sound.
     *
     * @param bool $disableNotification Sends the message silently . Users will receive a
     *   notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * Protects the contents of the sent message from forwarding and saving
     *
     * @param bool $protectContent Protects the contents of the sent message from forwarding and
     *   saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of
     * 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *
     * @param bool $allowPaidBroadcast Pass True to allow up to 1000 messages per second, ignoring
     *   broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be
     *   withdrawn from the bot's balance.
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast = true): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @param string $messageEffectId Unique identifier of the message effect to be added to the
     *   message; for private chats only
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * Description of the message to reply to
     *
     * @param mixed $replyParameters Description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(mixed $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard , custom reply
     * keyboard , instructions to remove a reply keyboard or to force a reply from the user.
     *
     * @param mixed $replyMarkup Additional interface options. A JSON-serialized object for an
     *   inline keyboard , custom reply keyboard , instructions to remove a reply keyboard or to
     *   force a reply from the user.
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
