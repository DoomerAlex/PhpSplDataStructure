# SplFixedArray (Фиксированный массив)

Класс SplFixedArray обеспечивает базовую функциональность, предоставляемую массивами. 
Главное различие между SplFixedArray и обычным массивом PHP в том, что размер SplFixedArray необходимо изменять вручную, 
а в качестве индексов могут выступать только целочисленные значения. 

Преимущество данных ограничений заключается в меньшем использовании памяти, чем стандартный массив (array).

# Методы SplFixedArray
- [SplFixedArray::count](https://www.php.net/manual/ru/splfixedarray.count.php) - Возвращает размер массива
- [SplFixedArray::setSize](https://www.php.net/manual/ru/splfixedarray.setsize.php) - Изменяет размер массива
- [SplFixedArray::getSize](https://www.php.net/manual/ru/splfixedarray.getsize.php) - Получает размер массива (аналогична методу count())
- [SplFixedArray::offsetExists](https://www.php.net/manual/ru/splfixedarray.offsetexists.php) - Возвращает факт наличия указанного индекса массива
- [SplFixedArray::offsetGet](https://www.php.net/manual/ru/splfixedarray.offsetget.php) - Возвращает значение по указанному индексу
- [SplFixedArray::offsetSet](https://www.php.net/manual/ru/splfixedarray.offsetset.php) - Устанавливает новое значение по заданному индексу
- [SplFixedArray::offsetUnset](https://www.php.net/manual/ru/splfixedarray.offsetunset.php) - Удаляет значение по индексу $index
- [SplFixedArray::toArray](https://www.php.net/manual/ru/splfixedarray.toarray.php) - Возвращает обычный PHP-массив со значениями фиксированного массива
- [SplFixedArray::fromArray](https://www.php.net/manual/ru/splfixedarray.fromarray.php) - Импортирует PHP-массив в объект класса SplFixedArray

## Данные методы не работают на версии PHP 8.1
(Выведет ошибку Error : Call to undefined method)
- [SplFixedArray::current](https://www.php.net/manual/ru/splfixedarray.current.php) - Возвращает текущий элемент массива
- [SplFixedArray::key](https://www.php.net/manual/ru/splfixedarray.key.php) - Возвращает индекс текущего элемента массива
- [SplFixedArray::next](https://www.php.net/manual/ru/splfixedarray.next.php) - Переходит к следующему элементу массива
- [SplFixedArray::rewind](https://www.php.net/manual/ru/splfixedarray.rewind.php) - Устанавливает итератор массива в начало
- [SplFixedArray::valid](https://www.php.net/manual/ru/splfixedarray.valid.php) - Проверяет массив на наличие элементов