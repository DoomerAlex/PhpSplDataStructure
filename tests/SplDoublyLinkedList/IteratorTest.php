<?php

namespace App\Tests\SplDoublyLinkedList;

final class IteratorTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->list->push(1);
        $this->list->push(2);
        $this->list->push(3);
    }

    /**
     * По умолчанию режим итерации как first in first out
     */
    public function test_default_iterator_mode(): void
    {
        self::assertSame(\SplDoublyLinkedList::IT_MODE_FIFO, $this->list->getIteratorMode());
    }

    /**
     * Если мы поменяем итератор как last in first out, то на выходе получим массив наоборот
     */
    public function test_LIFO_iterator_mode(): void
    {
        $this->list->setIteratorMode(\SplDoublyLinkedList::IT_MODE_LIFO);

        self::assertSame([3,2,1], $this->getListToArray());
    }

    /**
     * Если мы помеяем итератор и добам элемент в список на существующее место,
     * то имеющийся элемент останется где был, а новый встанет на следующую позицию
     * todo разобраться подробнее
     */
    public function test_add_elements_with_LIFO_iterator_mode(): void
    {
        $this->list->setIteratorMode(\SplDoublyLinkedList::IT_MODE_LIFO);

        $this->list->add(0,4);

        self::assertSame([3,4,2,1], $this->getListToArray());
    }

    /**
     * Перемещение по списку элементов
     *
     * Метод rewind() - Перемещает итератор в начало списка
     * Метод next() - Перемещает итератор в следующий элемент
     * Метод prev() - Перемещает итератор на предыдущий узел
     */
    public function test_move_iterator(): void
    {
        $this->list->rewind();

        self::assertSame(1, $this->list->current());
        self::assertSame(0, $this->list->key());

        $this->list->next();

        self::assertSame(2, $this->list->current());
        self::assertSame(1, $this->list->key());

        $this->list->prev();

        self::assertSame(1, $this->list->current());
        self::assertSame(0, $this->list->key());
    }
}