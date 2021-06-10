**Фабричный метод** — это порождающий паттерн проектирования, который определяет общий интерфейс для создания объектов в суперклассе, позволяя подклассам изменять тип создаваемых объектов.

Иными словами родительский (абстрактный) класс делегирует создание объекта дочернему классу.

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