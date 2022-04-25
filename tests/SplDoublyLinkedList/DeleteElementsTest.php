<?php

namespace App\Tests\SplDoublyLinkedList;

final class DeleteElementsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->list->push(1);
        $this->list->push(2);
        $this->list->push(3);
    }

    /**
     * Метод offsetUnset() - Удаляет элемент списка по ключу
     */
    public function test_delete_element_by_key(): void
    {
        $this->list->offsetUnset(0);

        self::assertSame([2,3], $this->getListToArray());
    }

    /**
     * Метод pop() - Возвращает последнйи элемент списка и удаляет его из списка
     */
    public function test_delete_last_element(): void
    {
        $value = $this->list->pop();

        self::assertSame(3, $value);
        self::assertSame([1,2], $this->getListToArray());
    }

    /**
     * Метод shift() - Возвращает первый элемент списка и удаляет его из списка
     * При этом все индексы сместятся на -1
     */
    public function test_delete_first_element(): void
    {
        self::assertSame(1, $this->list->offsetGet(0));

        $value = $this->list->shift();

        self::assertSame(1, $value);
        self::assertSame([2,3], $this->getListToArray());
        self::assertSame(2, $this->list->offsetGet(0));
    }
}