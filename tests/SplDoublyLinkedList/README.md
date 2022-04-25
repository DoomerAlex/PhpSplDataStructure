# Методы двусвязанного списка:

### Добавление эелементов: [примеры](AddElementsTest.php)
- [SplDoublyLinkedList::add](https://www.php.net/manual/ru/spldoublylinkedlist.add.php) — Добавляет/вставляет новое значение по указанному индексу
- [SplDoublyLinkedList::push](https://www.php.net/manual/ru/spldoublylinkedlist.push.php) — Помещает элемент в конец двусвязного списка
- [SplDoublyLinkedList::unshift](https://www.php.net/manual/ru/spldoublylinkedlist.unshift.php) — Вставляет элемент в начало двусвязного списка

### Получение эелементов: [примеры](GetElementsTest.php)
- [SplDoublyLinkedList::bottom](https://www.php.net/manual/ru/spldoublylinkedlist.bottom.php) — Получает узел, находящийся в начале двусвязного списка
- [SplDoublyLinkedList::top](https://www.php.net/manual/ru/spldoublylinkedlist.top.php) — Получает узел, находящийся в конце двусвязного списка
- [SplDoublyLinkedList::offsetGet](https://www.php.net/manual/ru/spldoublylinkedlist.offsetget.php) — Возвращает значение по указанному индексу
- [SplDoublyLinkedList::count](https://www.php.net/manual/ru/spldoublylinkedlist.count.php) — Подсчитывает количество элементов в двусвязном списке
- [SplDoublyLinkedList::current](https://www.php.net/manual/ru/spldoublylinkedlist.current.php) — Возвращает текущий элемент массива
- [SplDoublyLinkedList::key](https://www.php.net/manual/ru/spldoublylinkedlist.key.php) — Возвращает индекс текущего узла

### Изменение эелементов: [примеры](EditElementsTest.php)
- [SplDoublyLinkedList::offsetSet](https://www.php.net/manual/ru/spldoublylinkedlist.offsetset.php) — Устанавливает значение по заданному индексу $index в $value

### Удаление эелементов: [примеры](GetElementsTest.php)
- [SplDoublyLinkedList::offsetUnset](https://www.php.net/manual/ru/spldoublylinkedlist.offsetunset.php) — Удаляет значение по указанному индексу $index
- [SplDoublyLinkedList::pop](https://www.php.net/manual/ru/spldoublylinkedlist.pop.php) — Удаляет (выталкивает) узел, находящийся в конце двусвязного списка
- [SplDoublyLinkedList::shift](https://www.php.net/manual/ru/spldoublylinkedlist.shift.php) — Удаляет узел, находящийся в начале двусвязного списка

### Проверки [примеры](AssertsTest.php)
- [SplDoublyLinkedList::isEmpty](https://www.php.net/manual/ru/spldoublylinkedlist.isempty.php) — Проверяет, является ли двусвязный список пустым
- [SplDoublyLinkedList::offsetExists](https://www.php.net/manual/ru/spldoublylinkedlist.offsetexists.php) — Проверяет, существует ли запрашиваемый индекс
- [SplDoublyLinkedList::valid](https://www.php.net/manual/ru/spldoublylinkedlist.valid.php) — Проверяет, содержит ли узлы двусвязный список

### Итерации: [примеры](IteratorTest.php)
- [SplDoublyLinkedList::getIteratorMode](https://www.php.net/manual/ru/spldoublylinkedlist.getiteratormode.php) — Возвращает режим итерации
- [SplDoublyLinkedList::setIteratorMode](https://www.php.net/manual/ru/spldoublylinkedlist.setiteratormode.php) — Устанавливает режим итерации
- [SplDoublyLinkedList::next](https://www.php.net/manual/ru/spldoublylinkedlist.next.php) — Перемещает итератор к следующему элементу
- [SplDoublyLinkedList::prev](https://www.php.net/manual/ru/spldoublylinkedlist.prev.php) — Перемещает итератор к предыдущему элементу
- [SplDoublyLinkedList::rewind](https://www.php.net/manual/ru/spldoublylinkedlist.rewind.php) — Возвращает итератор в начало

### Сериализация эелементов: [примеры](SerializeTest.php)
- [SplDoublyLinkedList::serialize](https://www.php.net/manual/ru/spldoublylinkedlist.serialize.php) — Сериализует хранилище
- [SplDoublyLinkedList::unserialize](https://www.php.net/manual/ru/spldoublylinkedlist.unserialize.php) — Десериализует хранилище