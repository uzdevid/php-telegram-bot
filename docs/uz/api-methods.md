# API usullari

Barcha 185 Telegram Bot API usuli `UzDevid\Telegram\Bot\Message\Message\Method` nomlar maydonidagi
PHP sinflari sifatida amalga oshirilgan. Har bir sinf:

- `UzDevid\Telegram\Bot\Message\Message\Method` sinfini kengaytiradi va
  `UzDevid\Telegram\Bot\Message\Message\MethodInterface` ni amalga oshiradi
- sinf ustida rasmi Telegram Bot API tavsifi va
  [core.telegram.org/bots/api](https://core.telegram.org/bots/api) dagi tegishli sahifaga `@link`
  bilan PHPDoc blokiga ega
- har bir konstruktor argumenti va quriluvchi usulini mos rasmi parametr tavsifi bilan hujjatlaydi
- majburiy parametrlarni konstruktor orqali qabul qiladi va ixtiyoriy parametrlarni `static`
  qaytaradigan zanjirlanadigan quriluvchi usullar sifatida taqdim etadi

Ulardan istalganidan foydalanish uchun **[Klientdan foydalanish](use-client.md)** sahifasiga
qarang:

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$bot->withMethod((new SendMessage('Salom!'))->chatId(123456789))->send();
```

Har bir usul uchun to'liq va ishonchli hujjat (parametr turlari, cheklovlar va tavsiflar) uning
sinf faylidagi PHPDoc'da joylashgan — o'qish uchun sinfni oching yoki havola qilingan rasmi
sahifani tekshiring. Quyida tez topish uchun soha bo'yicha guruhlangan to'liq ro'yxat keltirilgan.

## Xabar yuborish

`SendMessage`, `SendMessageDraft`, `SendRichMessage`, `SendRichMessageDraft`, `SendPhoto`,
`SendAudio`, `SendDocument`, `SendVideo`, `SendAnimation`, `SendVoice`, `SendVideoNote`,
`SendPaidMedia`, `SendMediaGroup`, `SendLocation`, `SendVenue`, `SendContact`, `SendPoll`,
`SendDice`, `SendSticker`, `SendChecklist`, `SendChatAction`, `SendLivePhoto`,
`SendChatJoinRequestWebApp`

## Xabarlarni tahrirlash va o'chirish

`EditMessageText`, `EditMessageCaption`, `EditMessageMedia`, `EditMessageReplyMarkup`,
`EditMessageLiveLocation`, `StopMessageLiveLocation`, `EditMessageChecklist`, `DeleteMessage`,
`DeleteMessages`, `CopyMessage`, `CopyMessages`, `ForwardMessage`, `ForwardMessages`, `StopPoll`,
`DeleteEphemeralMessage`, `EditEphemeralMessageText`, `EditEphemeralMessageCaption`,
`EditEphemeralMessageMedia`, `EditEphemeralMessageReplyMarkup`

## Chatni boshqarish

`GetChat`, `GetChatAdministrators`, `GetChatMember`, `GetChatMemberCount`, `GetChatMenuButton`,
`SetChatMenuButton`, `LeaveChat`, `BanChatMember`, `UnbanChatMember`, `BanChatSenderChat`,
`UnbanChatSenderChat`, `RestrictChatMember`, `PromoteChatMember`,
`SetChatAdministratorCustomTitle`, `SetChatPermissions`, `SetChatPhoto`, `DeleteChatPhoto`,
`SetChatTitle`, `SetChatDescription`, `PinChatMessage`, `UnpinChatMessage`,
`UnpinAllChatMessages`, `SetChatStickerSet`, `DeleteChatStickerSet`, `SetChatMemberTag`

## Chatga taklif havolalari

`CreateChatInviteLink`, `EditChatInviteLink`, `RevokeChatInviteLink`, `ExportChatInviteLink`,
`CreateChatSubscriptionInviteLink`, `EditChatSubscriptionInviteLink`

## Chatga qo'shilish so'rovlari

`ApproveChatJoinRequest`, `DeclineChatJoinRequest`, `AnswerChatJoinRequestQuery`

## Forum mavzulari

`CreateForumTopic`, `EditForumTopic`, `CloseForumTopic`, `ReopenForumTopic`, `DeleteForumTopic`,
`UnpinAllForumTopicMessages`, `GetForumTopicIconStickers`, `EditGeneralForumTopic`,
`CloseGeneralForumTopic`, `ReopenGeneralForumTopic`, `HideGeneralForumTopic`,
`UnhideGeneralForumTopic`, `UnpinAllGeneralForumTopicMessages`

## Bot profili va buyruqlari

`GetMe`, `LogOut`, `Close`, `SetMyCommands`, `GetMyCommands`, `DeleteMyCommands`, `SetMyName`,
`GetMyName`, `SetMyDescription`, `GetMyDescription`, `SetMyShortDescription`,
`GetMyShortDescription`, `SetMyDefaultAdministratorRights`, `GetMyDefaultAdministratorRights`,
`SetMyProfilePhoto`, `RemoveMyProfilePhoto`

## Stikerlar

`GetStickerSet`, `GetCustomEmojiStickers`, `UploadStickerFile`, `CreateNewStickerSet`,
`AddStickerToSet`, `SetStickerPositionInSet`, `DeleteStickerFromSet`, `SetStickerEmojiList`,
`SetStickerKeywords`, `SetStickerMaskPosition`, `SetStickerSetTitle`, `SetStickerSetThumbnail`,
`SetCustomEmojiStickerSetThumbnail`, `DeleteStickerSet`, `ReplaceStickerInSet`

## Inline rejim va so'rovlarga javoblar

`Answer`, `AnswerCallbackQuery`, `AnswerShippingQuery`, `AnswerPreCheckoutQuery`,
`AnswerWebAppQuery`, `AnswerGuestQuery`, `SavePreparedInlineMessage`,
`SavePreparedKeyboardButton`

## O'yinlar

`SendGame`, `SetGameScore`, `GetGameHighScores`

## To'lovlar va Telegram Stars

`SendInvoice`, `CreateInvoiceLink`, `RefundStarPayment`, `GetStarTransactions`,
`GetMyStarBalance`, `EditUserStarSubscription`, `GetBusinessAccountStarBalance`,
`TransferBusinessAccountStars`

## Sovg'alar

`GetAvailableGifts`, `SendGift`, `GiftPremiumSubscription`, `GetUserGifts`, `GetChatGifts`,
`GetBusinessAccountGifts`, `ConvertGiftToStars`, `UpgradeGift`, `TransferGift`

## Biznes hisoblari

`GetBusinessConnection`, `SetBusinessAccountName`, `SetBusinessAccountUsername`,
`SetBusinessAccountBio`, `SetBusinessAccountGiftSettings`, `SetBusinessAccountProfilePhoto`,
`RemoveBusinessAccountProfilePhoto`, `ReadBusinessMessage`, `DeleteBusinessMessages`,
`GetManagedBotAccessSettings`, `SetManagedBotAccessSettings`, `GetManagedBotToken`,
`ReplaceManagedBotToken`

## Hikoyalar (Stories)

`PostStory`, `EditStory`, `DeleteStory`, `RepostStory`

## Tasdiqlash (Verification)

`VerifyUser`, `VerifyChat`, `RemoveUserVerification`, `RemoveChatVerification`

## Foydalanuvchi profili

`GetUserProfilePhotos`, `GetUserProfileAudios`, `GetUserChatBoosts`,
`GetUserPersonalChatMessages`, `SetUserEmojiStatus`

## Taklif qilingan postlar

`ApproveSuggestedPost`, `DeclineSuggestedPost`

## Xabar reaksiyalari

`SetMessageReaction`, `DeleteMessageReaction`, `DeleteAllMessageReactions`

## Webhooklar va yangilanishlar

`GetUpdates`, `SetWebhook`, `DeleteWebhook`, `GetWebhookInfo`

## Telegram Passport

`SetPassportDataErrors`

## Fayllar

`GetFile`

---

Keyingi qadam: **[Misollar](examples.md)**.
