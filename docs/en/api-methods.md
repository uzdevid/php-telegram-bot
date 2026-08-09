# API Methods

All 185 Telegram Bot API methods are implemented as PHP classes under the namespace
`UzDevid\Telegram\Bot\Message\Message\Method`. Every class:

- extends `UzDevid\Telegram\Bot\Message\Message\Method` and implements
  `UzDevid\Telegram\Bot\Message\Message\MethodInterface`
- has a PHPDoc block on the class with the official Telegram Bot API description and a `@link` to
  the corresponding page on [core.telegram.org/bots/api](https://core.telegram.org/bots/api)
- documents every constructor argument and builder method with a matching official parameter
  description
- accepts required parameters through the constructor and exposes optional parameters as chainable
  builder methods returning `static`

To use any of them, see **[Using the Client](use-client.md)**:

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$bot->withMethod((new SendMessage('Hello!'))->chatId(123456789))->send();
```

The full, authoritative documentation for each method (parameter types, constraints, and
descriptions) lives in the PHPDoc of its class file — open the class to read it, or check the
linked official page. Below is the complete list, grouped by area, for quick discovery.

## Messaging

`SendMessage`, `SendMessageDraft`, `SendRichMessage`, `SendRichMessageDraft`, `SendPhoto`,
`SendAudio`, `SendDocument`, `SendVideo`, `SendAnimation`, `SendVoice`, `SendVideoNote`,
`SendPaidMedia`, `SendMediaGroup`, `SendLocation`, `SendVenue`, `SendContact`, `SendPoll`,
`SendDice`, `SendSticker`, `SendChecklist`, `SendChatAction`, `SendLivePhoto`,
`SendChatJoinRequestWebApp`

## Editing & Deleting Messages

`EditMessageText`, `EditMessageCaption`, `EditMessageMedia`, `EditMessageReplyMarkup`,
`EditMessageLiveLocation`, `StopMessageLiveLocation`, `EditMessageChecklist`, `DeleteMessage`,
`DeleteMessages`, `CopyMessage`, `CopyMessages`, `ForwardMessage`, `ForwardMessages`, `StopPoll`,
`DeleteEphemeralMessage`, `EditEphemeralMessageText`, `EditEphemeralMessageCaption`,
`EditEphemeralMessageMedia`, `EditEphemeralMessageReplyMarkup`

## Chat Management

`GetChat`, `GetChatAdministrators`, `GetChatMember`, `GetChatMemberCount`, `GetChatMenuButton`,
`SetChatMenuButton`, `LeaveChat`, `BanChatMember`, `UnbanChatMember`, `BanChatSenderChat`,
`UnbanChatSenderChat`, `RestrictChatMember`, `PromoteChatMember`,
`SetChatAdministratorCustomTitle`, `SetChatPermissions`, `SetChatPhoto`, `DeleteChatPhoto`,
`SetChatTitle`, `SetChatDescription`, `PinChatMessage`, `UnpinChatMessage`,
`UnpinAllChatMessages`, `SetChatStickerSet`, `DeleteChatStickerSet`, `SetChatMemberTag`

## Chat Invite Links

`CreateChatInviteLink`, `EditChatInviteLink`, `RevokeChatInviteLink`, `ExportChatInviteLink`,
`CreateChatSubscriptionInviteLink`, `EditChatSubscriptionInviteLink`

## Chat Join Requests

`ApproveChatJoinRequest`, `DeclineChatJoinRequest`, `AnswerChatJoinRequestQuery`

## Forum Topics

`CreateForumTopic`, `EditForumTopic`, `CloseForumTopic`, `ReopenForumTopic`, `DeleteForumTopic`,
`UnpinAllForumTopicMessages`, `GetForumTopicIconStickers`, `EditGeneralForumTopic`,
`CloseGeneralForumTopic`, `ReopenGeneralForumTopic`, `HideGeneralForumTopic`,
`UnhideGeneralForumTopic`, `UnpinAllGeneralForumTopicMessages`

## Bot Profile & Commands

`GetMe`, `LogOut`, `Close`, `SetMyCommands`, `GetMyCommands`, `DeleteMyCommands`, `SetMyName`,
`GetMyName`, `SetMyDescription`, `GetMyDescription`, `SetMyShortDescription`,
`GetMyShortDescription`, `SetMyDefaultAdministratorRights`, `GetMyDefaultAdministratorRights`,
`SetMyProfilePhoto`, `RemoveMyProfilePhoto`

## Stickers

`GetStickerSet`, `GetCustomEmojiStickers`, `UploadStickerFile`, `CreateNewStickerSet`,
`AddStickerToSet`, `SetStickerPositionInSet`, `DeleteStickerFromSet`, `SetStickerEmojiList`,
`SetStickerKeywords`, `SetStickerMaskPosition`, `SetStickerSetTitle`, `SetStickerSetThumbnail`,
`SetCustomEmojiStickerSetThumbnail`, `DeleteStickerSet`, `ReplaceStickerInSet`

## Inline Mode & Query Responses

`Answer`, `AnswerCallbackQuery`, `AnswerShippingQuery`, `AnswerPreCheckoutQuery`,
`AnswerWebAppQuery`, `AnswerGuestQuery`, `SavePreparedInlineMessage`,
`SavePreparedKeyboardButton`

## Games

`SendGame`, `SetGameScore`, `GetGameHighScores`

## Payments & Telegram Stars

`SendInvoice`, `CreateInvoiceLink`, `RefundStarPayment`, `GetStarTransactions`,
`GetMyStarBalance`, `EditUserStarSubscription`, `GetBusinessAccountStarBalance`,
`TransferBusinessAccountStars`

## Gifts

`GetAvailableGifts`, `SendGift`, `GiftPremiumSubscription`, `GetUserGifts`, `GetChatGifts`,
`GetBusinessAccountGifts`, `ConvertGiftToStars`, `UpgradeGift`, `TransferGift`

## Business Accounts

`GetBusinessConnection`, `SetBusinessAccountName`, `SetBusinessAccountUsername`,
`SetBusinessAccountBio`, `SetBusinessAccountGiftSettings`, `SetBusinessAccountProfilePhoto`,
`RemoveBusinessAccountProfilePhoto`, `ReadBusinessMessage`, `DeleteBusinessMessages`,
`GetManagedBotAccessSettings`, `SetManagedBotAccessSettings`, `GetManagedBotToken`,
`ReplaceManagedBotToken`

## Stories

`PostStory`, `EditStory`, `DeleteStory`, `RepostStory`

## Verification

`VerifyUser`, `VerifyChat`, `RemoveUserVerification`, `RemoveChatVerification`

## User Profile

`GetUserProfilePhotos`, `GetUserProfileAudios`, `GetUserChatBoosts`,
`GetUserPersonalChatMessages`, `SetUserEmojiStatus`

## Suggested Posts

`ApproveSuggestedPost`, `DeclineSuggestedPost`

## Message Reactions

`SetMessageReaction`, `DeleteMessageReaction`, `DeleteAllMessageReactions`

## Webhooks & Updates

`GetUpdates`, `SetWebhook`, `DeleteWebhook`, `GetWebhookInfo`

## Telegram Passport

`SetPassportDataErrors`

## Files

`GetFile`

---

Next: **[Examples](examples.md)**.
