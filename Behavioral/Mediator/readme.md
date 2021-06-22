**Посредник** — это поведенческий паттерн проектирования, который позволяет уменьшить связанность множества классов между собой, благодаря перемещению этих связей в один класс-посредник.

```php
class TestEvent extends \Symfony\Contracts\EventDispatcher\Event
{

}

$dispatcher = new EventDispatcher();

$dispatcher->addListener('testEvent', function (\Symfony\Contracts\EventDispatcher\Event $testEvent) {
var_dump($testEvent);
});

$dispatcher->dispatch(new TestEvent(), 'testEvent');
```