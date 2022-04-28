# SplHeap (Куча)

Класс SplHeap предоставляет основные функциональные возможности кучи.

Класс SplHeap имеет 2 реализации
- [SplMaxHeap](https://www.php.net/manual/ru/class.splmaxheap.php) - Куча от большего к меньшему
- [SplMinHeap](https://www.php.net/manual/ru/class.splminheap.php) - Куча от меньшего к большему

Можно сделать свой класс унаследовавшись от SplHeap и переоопределя метод [SplHeap::compare](https://www.php.net/manual/ru/splheap.compare.php)
при помощи которого формируется сортировка кучи.

# Методы SplQueue:

- [SplHeap::count](https://www.php.net/manual/ru/splheap.count.php) — Определяет количество элементов в куче
- [SplHeap::current](https://www.php.net/manual/ru/splheap.current.php) — Возвращает текущий узел, на который указывает итератор
- [SplHeap::extract](https://www.php.net/manual/ru/splheap.extract.php) — Извлекает узел из кучи и пересортирует её
- [SplHeap::insert](https://www.php.net/manual/ru/splheap.insert.php) — Вставляет элемент в кучу и пересортирует её
- [SplHeap::isCorrupted](https://www.php.net/manual/ru/splheap.iscorrupted.php) — Указывает, находится ли куча в повреждённом состоянии
- [SplHeap::isEmpty](https://www.php.net/manual/ru/splheap.isempty.php) — Проверка, пуста ли куча
- [SplHeap::key](https://www.php.net/manual/ru/splheap.key.php) — Возвращает индекс текущего узла
- [SplHeap::next](https://www.php.net/manual/ru/splheap.next.php) — Переход к следующему узлу (при этом предыдущий узел забывается)
- [SplHeap::recoverFromCorruption](https://www.php.net/manual/ru/splheap.recoverfromcorruption.php) — Восстанавливает корректное состояние кучи
- [SplHeap::rewind](https://www.php.net/manual/ru/splheap.rewind.php) — Перевод итератора на начало
- [SplHeap::top](https://www.php.net/manual/ru/splheap.top.php) — Возвращает узел, находящийся на вершине кучи
- [SplHeap::valid](https://www.php.net/manual/ru/splheap.valid.php) — Проверяет, содержит ли куча ещё элементы