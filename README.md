# Структуры данных в PHP

SPL предоставляет набор стандартных структур данных. Они сгруппированы здесь по своей базовой реализации, которая 
обычно определяет их общую область применения.

## 1. Двусвязные списки

Двусвязный список (DLL) - это список узлов, связанных в обоих направлениях друг с другом. Операции итератора, 
доступ к обоим концам, добавление или удаление узлов стоимостью O(1), когда основная структура является DLL. 
Следовательно, они обеспечивает хорошую реализацию для стеков и очередей.

- [SplDoublyLinkedList](tests/SplDoublyLinkedList/README.md) - Двусвязный список
- - [SplStack](tests/SplStack/README.md) - Стек (LIFO)
- - [SplQueue](tests/SplQueue/README.md) - Очередь (FIFO)

## 3. Массивы

Массивы - структуры, которые хранят данные в непрерывном виде, доступные через индексы.
Не путайте их с массивами PHP: последние на самом деле реализованы в виде упорядоченных хеш-таблиц.

- [SplFixedArray](tests/SplFixedArray/README.md) - Массив фиксированной длинны.