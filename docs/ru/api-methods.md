# Методы API

Все 185 методов Telegram Bot API реализованы как классы PHP в пространстве имён
`UzDevid\Telegram\Bot\Message\Message\Method`. Каждый класс:

- расширяет `UzDevid\Telegram\Bot\Message\Message\Method` и реализует
  `UzDevid\Telegram\Bot\Message\Message\MethodInterface`
- содержит PHPDoc-блок над классом с официальным описанием из Telegram Bot API и `@link` на
  соответствующую страницу [core.telegram.org/bots/api](https://core.telegram.org/bots/api)
- документирует каждый аргумент конструктора и метод-строитель с соответствующим официальным
  описанием параметра
- принимает обязательные параметры через конструктор и предоставляет необязательные параметры как
  цепочку методов-строителей, возвращающих `static`

Чтобы использовать любой из них, см. **[Использование клиента](use-client.md)**:

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$bot->withMethod((new SendMessage('Привет!'))->chatId(123456789))->send();
```

Полная и достоверная документация по каждому методу (типы параметров, ограничения и описания)
находится в PHPDoc его класса — откройте класс, чтобы прочитать её, или посмотрите ссылку на
официальную страницу. Ниже приведён полный список, сгруппированный по разделам для быстрого
поиска.

## Отправка сообщений

`SendMessage`, `SendMessageDraft`, `SendRichMessage`, `SendRichMessageDraft`, `SendPhoto`,
`SendAudio`, `SendDocument`, `SendVideo`, `SendAnimation`, `SendVoice`, `SendVideoNote`,
`SendPaidMedia`, `SendMediaGroup`, `SendLocation`, `SendVenue`, `SendContact`, `SendPoll`,
`SendDice`, `SendSticker`, `SendChecklist`, `SendChatAction`, `SendLivePhoto`,
`SendChatJoinRequestWebApp`

## Редактирование и удаление сообщений

`EditMessageText`, `EditMessageCaption`, `EditMessageMedia`, `EditMessageReplyMarkup`,
`EditMessageLiveLocation`, `StopMessageLiveLocation`, `EditMessageChecklist`, `DeleteMessage`,
`DeleteMessages`, `CopyMessage`, `CopyMessages`, `ForwardMessage`, `ForwardMessages`, `StopPoll`,
`DeleteEphemeralMessage`, `EditEphemeralMessageText`, `EditEphemeralMessageCaption`,
`EditEphemeralMessageMedia`, `EditEphemeralMessageReplyMarkup`

## Управление чатом

`GetChat`, `GetChatAdministrators`, `GetChatMember`, `GetChatMemberCount`, `GetChatMenuButton`,
`SetChatMenuButton`, `LeaveChat`, `BanChatMember`, `UnbanChatMember`, `BanChatSenderChat`,
`UnbanChatSenderChat`, `RestrictChatMember`, `PromoteChatMember`,
`SetChatAdministratorCustomTitle`, `SetChatPermissions`, `SetChatPhoto`, `DeleteChatPhoto`,
`SetChatTitle`, `SetChatDescription`, `PinChatMessage`, `UnpinChatMessage`,
`UnpinAllChatMessages`, `SetChatStickerSet`, `DeleteChatStickerSet`, `SetChatMemberTag`

## Ссылки-приглашения в чат

`CreateChatInviteLink`, `EditChatInviteLink`, `RevokeChatInviteLink`, `ExportChatInviteLink`,
`CreateChatSubscriptionInviteLink`, `EditChatSubscriptionInviteLink`

## Запросы на вступление в чат

`ApproveChatJoinRequest`, `DeclineChatJoinRequest`, `AnswerChatJoinRequestQuery`

## Темы форума

`CreateForumTopic`, `EditForumTopic`, `CloseForumTopic`, `ReopenForumTopic`, `DeleteForumTopic`,
`UnpinAllForumTopicMessages`, `GetForumTopicIconStickers`, `EditGeneralForumTopic`,
`CloseGeneralForumTopic`, `ReopenGeneralForumTopic`, `HideGeneralForumTopic`,
`UnhideGeneralForumTopic`, `UnpinAllGeneralForumTopicMessages`

## Профиль и команды бота

`GetMe`, `LogOut`, `Close`, `SetMyCommands`, `GetMyCommands`, `DeleteMyCommands`, `SetMyName`,
`GetMyName`, `SetMyDescription`, `GetMyDescription`, `SetMyShortDescription`,
`GetMyShortDescription`, `SetMyDefaultAdministratorRights`, `GetMyDefaultAdministratorRights`,
`SetMyProfilePhoto`, `RemoveMyProfilePhoto`

## Стикеры

`GetStickerSet`, `GetCustomEmojiStickers`, `UploadStickerFile`, `CreateNewStickerSet`,
`AddStickerToSet`, `SetStickerPositionInSet`, `DeleteStickerFromSet`, `SetStickerEmojiList`,
`SetStickerKeywords`, `SetStickerMaskPosition`, `SetStickerSetTitle`, `SetStickerSetThumbnail`,
`SetCustomEmojiStickerSetThumbnail`, `DeleteStickerSet`, `ReplaceStickerInSet`

## Встроенный режим и ответы на запросы

`Answer`, `AnswerCallbackQuery`, `AnswerShippingQuery`, `AnswerPreCheckoutQuery`,
`AnswerWebAppQuery`, `AnswerGuestQuery`, `SavePreparedInlineMessage`,
`SavePreparedKeyboardButton`

## Игры

`SendGame`, `SetGameScore`, `GetGameHighScores`

## Платежи и Telegram Stars

`SendInvoice`, `CreateInvoiceLink`, `RefundStarPayment`, `GetStarTransactions`,
`GetMyStarBalance`, `EditUserStarSubscription`, `GetBusinessAccountStarBalance`,
`TransferBusinessAccountStars`

## Подарки

`GetAvailableGifts`, `SendGift`, `GiftPremiumSubscription`, `GetUserGifts`, `GetChatGifts`,
`GetBusinessAccountGifts`, `ConvertGiftToStars`, `UpgradeGift`, `TransferGift`

## Бизнес-аккаунты

`GetBusinessConnection`, `SetBusinessAccountName`, `SetBusinessAccountUsername`,
`SetBusinessAccountBio`, `SetBusinessAccountGiftSettings`, `SetBusinessAccountProfilePhoto`,
`RemoveBusinessAccountProfilePhoto`, `ReadBusinessMessage`, `DeleteBusinessMessages`,
`GetManagedBotAccessSettings`, `SetManagedBotAccessSettings`, `GetManagedBotToken`,
`ReplaceManagedBotToken`

## Истории (Stories)

`PostStory`, `EditStory`, `DeleteStory`, `RepostStory`

## Верификация

`VerifyUser`, `VerifyChat`, `RemoveUserVerification`, `RemoveChatVerification`

## Профиль пользователя

`GetUserProfilePhotos`, `GetUserProfileAudios`, `GetUserChatBoosts`,
`GetUserPersonalChatMessages`, `SetUserEmojiStatus`

## Предложенные посты

`ApproveSuggestedPost`, `DeclineSuggestedPost`

## Реакции на сообщения

`SetMessageReaction`, `DeleteMessageReaction`, `DeleteAllMessageReactions`

## Вебхуки и обновления

`GetUpdates`, `SetWebhook`, `DeleteWebhook`, `GetWebhookInfo`

## Telegram Passport

`SetPassportDataErrors`

## Файлы

`GetFile`

---

Далее: **[Примеры](examples.md)**.
