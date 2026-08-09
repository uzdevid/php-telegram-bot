# Using the Server

## English

The `Server` class handles incoming updates from Telegram and routes them to appropriate handlers.

### Setting Up the Server

```php
use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;
use Psr\Container\ContainerInterface;

$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true);

$server
    ->withPayload($payload)
    ->onMessage(MessageHandler::class)
    ->onCallbackQuery(CallbackHandler::class)
    ->onInlineQuery(InlineHandler::class);
```

### Creating a Message Handler

```php
use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

class StartHandler implements MessageHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }
    
    public function handle(MessageUpdate $update): void {
        $message = new SendMessage('Welcome!');
        
        $this->client
            ->withChatId($update->message->chat->id)
            ->withMethod($message)
            ->send();
    }
}
```

### Creating a Callback Query Handler

```php
use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\AnswerCallbackQuery;

class ButtonHandler implements CallbackQueryHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(CallbackQueryUpdate $query): bool {
        return $query->callbackQuery->data === 'button_clicked';
    }
    
    public function handle(CallbackQueryUpdate $query): void {
        $answer = new AnswerCallbackQuery($query->callbackQuery->id);
        $answer->text('Button clicked!')->showAlert(true);
        
        $this->client
            ->withMethod($answer)
            ->send();
    }
}
```

### Creating an Inline Query Handler

```php
use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\Answer;
use UzDevid\Telegram\Bot\Message\Answer\Result\ArticleResult;

class InlineHandler implements InlineQueryHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(InlineQueryUpdate $update): bool {
        return true; // Handle all inline queries
    }
    
    public function handle(InlineQueryUpdate $update): void {
        $result = new ArticleResult('article_1', 'Title', 'Description');
        
        $answer = new Answer($update->inlineQuery->id);
        $answer->addResult($result);
        
        $this->client
            ->withMethod($answer)
            ->send();
    }
}
```

### Webhook Integration

For webhook-based updates, add this to your webhook endpoint:

```php
<?php

// webhook.php
use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true);

$server
    ->withPayload($payload)
    ->onMessage(MessageHandler::class)
    ->onCallbackQuery(CallbackHandler::class);

// Telegram expects a 200 OK response
http_response_code(200);
echo 'OK';
```

---

## O'zbekcha

`Server` sinfi Telegramdan kiruvchi yangilanishlarni boshqaradi va ularni tegishli ishlovchilar uchun yo'naltiradi.

### Serverni sozlash

```php
use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;
use Psr\Container\ContainerInterface;

$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true);

$server
    ->withPayload($payload)
    ->onMessage(XabarIshlovchisi::class)
    ->onCallbackQuery(KallbekIshlovchisi::class)
    ->onInlineQuery(InlineIshlovchisi::class);
```

### Xabar ishlovchisini yaratish

```php
use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

class BoshlanishIshlovchisi implements MessageHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }
    
    public function handle(MessageUpdate $update): void {
        $message = new SendMessage('Xush kelibsiz!');
        
        $this->client
            ->withChatId($update->message->chat->id)
            ->withMethod($message)
            ->send();
    }
}
```

### Callback sorovi ishlovchisini yaratish

```php
use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\AnswerCallbackQuery;

class TugmaIshlovchisi implements CallbackQueryHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(CallbackQueryUpdate $query): bool {
        return $query->callbackQuery->data === 'tugma_bosildi';
    }
    
    public function handle(CallbackQueryUpdate $query): void {
        $answer = new AnswerCallbackQuery($query->callbackQuery->id);
        $answer->text('Tugma bosildi!')->showAlert(true);
        
        $this->client
            ->withMethod($answer)
            ->send();
    }
}
```

### Inline sorovi ishlovchisini yaratish

```php
use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\Answer;
use UzDevid\Telegram\Bot\Message\Answer\Result\ArticleResult;

class InlineIshlovchisi implements InlineQueryHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(InlineQueryUpdate $update): bool {
        return true; // Barcha inline soruvlarni boshqarish
    }
    
    public function handle(InlineQueryUpdate $update): void {
        $result = new ArticleResult('maqola_1', 'Sarlavha', 'Tavsif');
        
        $answer = new Answer($update->inlineQuery->id);
        $answer->addResult($result);
        
        $this->client
            ->withMethod($answer)
            ->send();
    }
}
```

### Webhook integratsiyasi

Webhook-asoslangan yangilanishlar uchun webhook endpoint-iga quyidagini qo'shing:

```php
<?php

// webhook.php
use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true);

$server
    ->withPayload($payload)
    ->onMessage(XabarIshlovchisi::class)
    ->onCallbackQuery(KallbekIshlovchisi::class);

// Telegram 200 OK javobini kutadi
http_response_code(200);
echo 'OK';
```

---

## Русский

Класс `Server` обрабатывает входящие обновления от Telegram и маршрутизирует их соответствующим обработчикам.

### Настройка сервера

```php
use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;
use Psr\Container\ContainerInterface;

$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true);

$server
    ->withPayload($payload)
    ->onMessage(ОбработчикСообщений::class)
    ->onCallbackQuery(ОбработчикОтветов::class)
    ->onInlineQuery(ОбработчикИнлайна::class);
```

### Создание обработчика сообщений

```php
use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

class ОбработчикПуска implements MessageHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }
    
    public function handle(MessageUpdate $update): void {
        $message = new SendMessage('Добро пожаловать!');
        
        $this->client
            ->withChatId($update->message->chat->id)
            ->withMethod($message)
            ->send();
    }
}
```

### Создание обработчика Callback Query

```php
use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\AnswerCallbackQuery;

class ОбработчикКнопок implements CallbackQueryHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(CallbackQueryUpdate $query): bool {
        return $query->callbackQuery->data === 'knopka_nazhata';
    }
    
    public function handle(CallbackQueryUpdate $query): void {
        $answer = new AnswerCallbackQuery($query->callbackQuery->id);
        $answer->text('Кнопка нажата!')->showAlert(true);
        
        $this->client
            ->withMethod($answer)
            ->send();
    }
}
```

### Создание обработчика Inline Query

```php
use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;
use UzDevid\Telegram\Bot\Message\Message\Method\Answer;
use UzDevid\Telegram\Bot\Message\Answer\Result\ArticleResult;

class ОбработчикИнлайна implements InlineQueryHandlerInterface {
    public function __construct(private Client $client) {}
    
    public function canHandle(InlineQueryUpdate $update): bool {
        return true; // Обработать все встроенные запросы
    }
    
    public function handle(InlineQueryUpdate $update): void {
        $result = new ArticleResult('stat_1', 'Заголовок', 'Описание');
        
        $answer = new Answer($update->inlineQuery->id);
        $answer->addResult($result);
        
        $this->client
            ->withMethod($answer)
            ->send();
    }
}
```

### Интеграция с вебхуком

Для получения обновлений через вебхук добавьте это к концу вашего endpoint-а:

```php
<?php

// webhook.php
use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true);

$server
    ->withPayload($payload)
    ->onMessage(ОбработчикСообщений::class)
    ->onCallbackQuery(ОбработчикОтветов::class);

// Telegram ожидает ответ 200 OK
http_response_code(200);
echo 'OK';
```
