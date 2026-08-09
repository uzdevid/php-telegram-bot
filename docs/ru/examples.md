# Примеры

## Базовая настройка бота

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('ВАШ_ТОКЕН_БОТА');
$bot = new Client($config, new HttpClient());
```

## Отправка текстового сообщения

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Привет, мир!');
$message->chatId(123456789)->parseMode('HTML');

$bot->withMethod($message)->send();
```

## Отправка фото

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo->chatId(123456789)->caption('Красивое фото');

$bot->withMethod($photo)->send();
```

## Встроенная клавиатура (Inline keyboard)

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$row = (new InlineRow())
    ->addButton((new InlineButton())->text('Перейти на example.com')->url('https://example.com'))
    ->addButton((new InlineButton())->text('Нажми меня')->callbackData('action:click'));

$keyboard = (new InlineKeyboardMarkup())->addRow($row);

$message = new SendMessage('Выберите вариант:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Обычная клавиатура (Reply keyboard)

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$row = (new ReplyRow())->addButton((new ReplyButton())->text('Поделиться контактом')->requestContact());

$keyboard = (new ReplyKeyboardMarkup())->addRow($row)->resizeKeyboard();

$message = new SendMessage('Пожалуйста, поделитесь своим контактом:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Редактирование сообщения

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Обновлённый текст');

$bot->withChatId(123456789)->withMessageId(42)->withMethod($edit)->edit();
```

## Обработка `/start` через вебхук

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class StartMessageHandler implements MessageHandlerInterface {
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }

    public function handle(MessageUpdate $update): void {
        // Ответить пользователю, сохранить его в базу данных и т.д.
    }
}
```

```php
<?php
// webhook.php

require __DIR__ . '/vendor/autoload.php';

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$container = /* ваш PSR-11 контейнер */;
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server->withPayload($payload)->onMessage(StartMessageHandler::class);
```

## Опрос обновлений (polling)

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

while (true) {
    $getUpdates = new GetUpdates();
    $getUpdates->offset($offset)->timeout(30);

    $updates = $bot->withMethod($getUpdates)->send();

    foreach ($updates as $update) {
        // Обработайте $update здесь
        $offset = $update['update_id'] + 1;
    }
}
```

## Настройка вебхука

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$setWebhook = new SetWebhook('https://example.com/webhook.php');
$setWebhook->maxConnections(40)->dropPendingUpdates(true);

$bot->withMethod($setWebhook)->send();
```

## Ответ на callback-запрос

```php
use UzDevid\Telegram\Bot\Message\Message\Method\AnswerCallbackQuery;

$answer = new AnswerCallbackQuery($callbackQueryId);
$answer->text('Действие выполнено!')->showAlert(false);

$bot->withMethod($answer)->send();
```
