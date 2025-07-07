Создайте GET-эндпоинт /api/prices, который возвращает JSON-список товаров (`id`, title, `price`).

При передаче параметра currency (`RUB`, USD, EUR`) — возвращайте цену с конвертацией (RUB = 1; USD = 90; EUR = 100) и форматированием (`$1.50, €2.00, `1 200 ₽`).

Используйте Laravel 8+ и Laravel Resource. Ответ — в формате JSON.

* GET /api/prices
* GET /api/prices?currency=USD
* GET /api/prices?currency=EUR
