# Использование клиента

`UzDevid\Telegram\Bot\Client` реализует `UzDevid\Telegram\Bot\ClientInterface` и отвечает за
отправку любого метода Telegram Bot API и возврат декодированного ответа.

## Настройка

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('ВАШ_ТОКЕН_БОТА');
$bot = new Client($config, new HttpClient());
```

## Отправка сообщения

Каждый метод Telegram Bot API — это класс в пространстве имён
`UzDevid\Telegram\Bot\Message\Message\Method`, реализующий
`UzDevid\Telegram\Bot\Message\Message\MethodInterface`. Классы методов используют паттерн
"строитель" (builder): обязательные параметры передаются в конструктор, а необязательные — через
цепочку методов.

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Привет, мир!');
$message
    ->chatId(123456789)
    ->parseMode('HTML')
    ->disableNotification(false);

$response = $bot->withMethod($message)->send();
```

`Client::send()` объединяет `chat_id`, установленный через `Client::withChatId()` (если он задан),
с собственной полезной нагрузкой метода и отправляет запрос. У большинства классов методов уже
есть свой метод-строитель `chatId()`, поэтому вызывать `withChatId()` на клиенте необязательно.

## Редактирование сообщения

Используйте `Client::edit()` вместе с `withChatId()` и `withMessageId()`:

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Обновлённый текст');

$bot
    ->withChatId(123456789)
    ->withMessageId(42)
    ->withMethod($edit)
    ->edit();
```

## Отправка фото

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo
    ->chatId(123456789)
    ->caption('Красивое фото')
    ->parseMode('Markdown');

$bot->withMethod($photo)->send();
```

## Встроенные клавиатуры (Inline keyboard)

Встроенные клавиатуры строятся из классов
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup`, `InlineRow` и
`InlineButton`:

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$visitButton = (new InlineButton())->text('Перейти на example.com')->url('https://example.com');
$actionButton = (new InlineButton())->text('Нажми меня')->callbackData('action:click');

$row = (new InlineRow())
    ->addButton($visitButton)
    ->addButton($actionButton);

$keyboard = (new InlineKeyboardMarkup())->addRow($row);

$message = new SendMessage('Выберите вариант:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Обычные клавиатуры (Reply keyboard)

Обычные клавиатуры используют классы
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup`, `ReplyRow` и
`ReplyButton`:

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$contactButton = (new ReplyButton())->text('Поделиться контактом')->requestContact();

$row = (new ReplyRow())->addButton($contactButton);

$keyboard = (new ReplyKeyboardMarkup())
    ->addRow($row)
    ->resizeKeyboard()
    ->oneTimeKeyboard(true);

$message = new SendMessage('Пожалуйста, поделитесь своим контактом:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

Чтобы убрать обычную клавиатуру, используйте
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardRemove`. Чтобы запросить ответ у
пользователя, используйте `UzDevid\Telegram\Bot\Message\Message\Keyboard\Force\ForceReply`. Оба
класса реализуют `ReplyMarkupInterface` и передаются в `addReplyMarkup()` таким же образом.

## Вызов любого другого метода

Каждый метод, перечисленный в разделе **[Методы API](api-methods.md)**, работает одинаково:
создайте класс, вызовите нужные методы-строители по цепочке, затем вызовите
`$bot->withMethod($method)->send()`.

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetMe;

$me = $bot->withMethod(new GetMe())->send();
```

Далее: **[Использование сервера](use-server.md)**.
