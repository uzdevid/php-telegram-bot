# API Methods Reference

## English

All 185+ Telegram Bot API methods are available as PHP classes. Each method follows the builder pattern for fluent configuration.

### Messaging Methods

- `SendMessage` - Send text messages
- `SendPhoto` - Send photos
- `SendVideo` - Send videos
- `SendAudio` - Send audio files
- `SendVoice` - Send voice messages
- `SendDocument` - Send documents
- `SendAnimation` - Send animations
- `SendDice` - Send dice/game
- `SendContact` - Send contact cards
- `SendLocation` - Send locations
- `SendVenue` - Send venues
- `SendPoll` - Send polls

### Editing Methods

- `EditMessageText` - Edit message text
- `EditMessageReplyMarkup` - Edit message keyboards
- `EditMessageLiveLocation` - Update live locations
- `DeleteMessage` - Delete messages

### User Methods

- `GetMe` - Get bot information
- `GetUserProfilePhotos` - Get user photos
- `GetChat` - Get chat information
- `GetChatMember` - Get chat member info
- `GetChatAdministrators` - Get chat admins
- `GetChatMemberCount` - Get chat member count

### Chat Management

- `LeaveChat` - Leave a chat
- `PinMessage` - Pin a message
- `UnpinMessage` - Unpin a message
- `UnpinAllMessages` - Unpin all messages
- `BanChatMember` - Ban a user
- `RestrictChatMember` - Restrict user permissions
- `PromoteChatMember` - Promote to admin

### Inline Query Methods

- `Answer` - Answer inline queries
- `AnswerCallbackQuery` - Answer callback queries
- `AnswerShippingQuery` - Answer shipping queries
- `AnswerPreCheckoutQuery` - Answer pre-checkout queries

### Payment Methods

- `SendInvoice` - Send payment invoices
- `AnswerShippingQuery` - Handle shipping options
- `AnswerPreCheckoutQuery` - Confirm payment

### Game Methods

- `SendGame` - Send games
- `SetGameScore` - Set game scores
- `GetGameHighScores` - Get high scores

### Webhook Methods

- `SetWebhook` - Set webhook URL
- `DeleteWebhook` - Remove webhook
- `GetWebhookInfo` - Get webhook status
- `GetUpdates` - Poll for updates

### File Methods

- `GetFile` - Get file information
- `DownloadFile` - Download files

And many more methods covering the complete Telegram Bot API.

For detailed documentation on each method including parameters, see the PHPDoc in each method class or visit [Telegram Bot API Documentation](https://core.telegram.org/bots/api).

---

## O'zbekcha

Barcha 185+ Telegram Bot API usullari PHP sinflari sifatida mavjud. Har bir usul oqli konfiguratsiya uchun quriluvchi namunasini bajaradi.

### Xabar yuborish usullari

- `SendMessage` - Matnli xabarlar yuborish
- `SendPhoto` - Rasmlar yuborish
- `SendVideo` - Videolar yuborish
- `SendAudio` - Audio fayllar yuborish
- `SendVoice` - Ovoz xabarlari yuborish
- `SendDocument` - Hujjatlar yuborish
- `SendAnimation` - Animatsiyalar yuborish
- `SendDice` - Shusha/o'yin yuborish
- `SendContact` - Kontakt kartalar yuborish
- `SendLocation` - Joylashuvlar yuborish
- `SendVenue` - Joylar yuborish
- `SendPoll` - So'rovnoma yuborish

### Tahrirish usullari

- `EditMessageText` - Xabar matnini tahrirlash
- `EditMessageReplyMarkup` - Xabar klaviaturalarini tahrirlash
- `EditMessageLiveLocation` - Jonli joylashuvlarni yangilash
- `DeleteMessage` - Xabarlarni o'chirish

### Foydalanuvchi usullari

- `GetMe` - Bot ma'lumotlarini olish
- `GetUserProfilePhotos` - Foydalanuvchi fotolarini olish
- `GetChat` - Chat ma'lumotlarini olish
- `GetChatMember` - Chat a'zo ma'lumotlarini olish
- `GetChatAdministrators` - Chat adminlarini olish
- `GetChatMemberCount` - Chat a'zolari sonini olish

### Chat boshqaruvi

- `LeaveChat` - Chatdan chiqish
- `PinMessage` - Xabarni mahkamlash
- `UnpinMessage` - Xabarni mahkamlamani olib tashlash
- `UnpinAllMessages` - Barcha mahkalgan xabarlarni olib tashlash
- `BanChatMember` - Foydalanuvchini bloklash
- `RestrictChatMember` - Foydalanuvchi ruxsatlarini cheklash
- `PromoteChatMember` - Admin sifatida ko'tarish

### Inline sorovi usullari

- `Answer` - Inline soruvlarga javob berish
- `AnswerCallbackQuery` - Callback soruvlariga javob berish
- `AnswerShippingQuery` - Yetkazib berish soruvlariga javob berish
- `AnswerPreCheckoutQuery` - To'lov oldidan tekshirish soruvlariga javob berish

### To'lov usullari

- `SendInvoice` - To'lov hisob-kitoblarini yuborish
- `AnswerShippingQuery` - Yetkazib berish variantlarini boshqarish
- `AnswerPreCheckoutQuery` - To'lovni tasdiqlash

### O'yin usullari

- `SendGame` - O'yin yuborish
- `SetGameScore` - O'yin ballarini o'rnatish
- `GetGameHighScores` - Eng yuqori ballarni olish

### Webhook usullari

- `SetWebhook` - Webhook URL-ni o'rnatish
- `DeleteWebhook` - Webhook-ni olib tashlash
- `GetWebhookInfo` - Webhook holatini olish
- `GetUpdates` - Yangilanishlar uchun so'rovni qo'lash

### Fayl usullari

- `GetFile` - Fayl ma'lumotlarini olish
- `DownloadFile` - Fayllarni yuklab olish

Va ko'p boshqa usullar Telegram Bot API-ning to'liq qoplamasini beradi.

Har bir usul haqida batafsil ma'lumot, parametrlar uchun har bir usul klassidagi PHPDoc-ga qarang yoki [Telegram Bot API Dokumentatsiyasi](https://core.telegram.org/bots/api)ni ziyorat qiling.

---

## Русский

Все 185+ методов Telegram Bot API доступны как классы PHP. Каждый метод следует паттерну построения для беглого конфигурирования.

### Методы отправки сообщений

- `SendMessage` - Отправить текстовые сообщения
- `SendPhoto` - Отправить фото
- `SendVideo` - Отправить видео
- `SendAudio` - Отправить аудиофайлы
- `SendVoice` - Отправить голосовые сообщения
- `SendDocument` - Отправить документы
- `SendAnimation` - Отправить анимацию
- `SendDice` - Отправить кубик/игру
- `SendContact` - Отправить контакты
- `SendLocation` - Отправить местоположение
- `SendVenue` - Отправить места
- `SendPoll` - Отправить опросы

### Методы редактирования

- `EditMessageText` - Редактировать текст сообщения
- `EditMessageReplyMarkup` - Редактировать клавиатуры
- `EditMessageLiveLocation` - Обновить живое местоположение
- `DeleteMessage` - Удалить сообщения

### Методы пользователя

- `GetMe` - Получить информацию о боте
- `GetUserProfilePhotos` - Получить фото пользователя
- `GetChat` - Получить информацию о чате
- `GetChatMember` - Получить информацию о члене чата
- `GetChatAdministrators` - Получить админов чата
- `GetChatMemberCount` - Получить количество членов

### Управление чатом

- `LeaveChat` - Выйти из чата
- `PinMessage` - Закрепить сообщение
- `UnpinMessage` - Открепить сообщение
- `UnpinAllMessages` - Открепить все сообщения
- `BanChatMember` - Заблокировать пользователя
- `RestrictChatMember` - Ограничить права пользователя
- `PromoteChatMember` - Повысить до администратора

### Методы встроенных запросов

- `Answer` - Ответить на встроенные запросы
- `AnswerCallbackQuery` - Ответить на callback запросы
- `AnswerShippingQuery` - Ответить на запросы доставки
- `AnswerPreCheckoutQuery` - Ответить на запросы предоплаты

### Методы платежей

- `SendInvoice` - Отправить счета
- `AnswerShippingQuery` - Обработать варианты доставки
- `AnswerPreCheckoutQuery` - Подтвердить платеж

### Методы игр

- `SendGame` - Отправить игры
- `SetGameScore` - Установить игровые баллы
- `GetGameHighScores` - Получить рекорды

### Методы вебхуков

- `SetWebhook` - Установить URL вебхука
- `DeleteWebhook` - Удалить вебхук
- `GetWebhookInfo` - Получить статус вебхука
- `GetUpdates` - Получить обновления

### Методы файлов

- `GetFile` - Получить информацию о файле
- `DownloadFile` - Загрузить файлы

И многое другое, охватывая полный Telegram Bot API.

Подробную документацию по каждому методу, включая параметры, см. в PHPDoc в каждом классе метода или посетите [Документацию Telegram Bot API](https://core.telegram.org/bots/api).
