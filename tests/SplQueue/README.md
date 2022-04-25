# SplQueue (Очередь)

Релизуется через класс SplQueue, который предоставляет основные функциональные возможности очереди, 
реализованные с использованием двусвязного списка [SplDoublyLinkedList](../SplDoublyLinkedList/README.md)

Направление итерации не может быть изменено для объектов SplQueue, оно всегда равно SplDoublyLinkedList::IT_MODE_FIFO

# Методы SplQueue:

- [SplQueue::dequeue](https://www.php.net/manual/ru/splqueue.dequeue.php) - Удаляет элемент из очереди (псевдоним функции \SplDoublyLinkedList::shift())
- [SplQueue::enqueue](https://www.php.net/manual/ru/splqueue.enqueue.php) - Добавляет элемент в очередь (псевдоним функции \SplDoublyLinkedList::push())
+ [Наследуемые функции от SplDoublyLinkedList](../SplDoublyLinkedList/README.md)

## [Примеры](QueueTest.php)