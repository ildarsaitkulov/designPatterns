**Фасад** — это структурный паттерн, который предоставляет простой (но урезанный) интерфейс к сложной системе объектов, библиотеке или фреймворку.

```php
$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
$facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");
```