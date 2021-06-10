**Абстрактная фабрика** — это порождающий паттерн проектирования, который позволяет создавать семейства связанных объектов, не привязываясь к конкретным классам создаваемых объектов.

Есть интерфейс для фабрик GUIFactory и его реаилзуют уже WinFactory и MacFactory, которые создают объекты гуи.

```php
abstract class Dialog
{
    public function render()
    {
        $button = $this->createButton();
        $button->render();
        $button->onClick(function () {
            echo 'click' . PHP_EOL;
        });
    }

    abstract public function createButton(): Button;
}
```