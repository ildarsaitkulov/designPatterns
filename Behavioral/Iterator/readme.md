**Итератор** — это поведенческий паттерн, позволяющий последовательно обходить сложную коллекцию, без раскрытия деталей её реализации.

PHP имеет встроенный интерфейс для поддержки итераторов (Iterator), на основании которого можно строить свои Итераторы, совместимые с остальным PHP-кодом.

Благодаря Итератору, клиент может обходить разные коллекции одним и тем же способом, используя единый интерфейс итераторов.