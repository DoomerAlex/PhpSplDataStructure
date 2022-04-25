<?php

namespace App\Tests\SplDoublyLinkedList;

final class GetElementsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->list->push(1);
        $this->list->push(2);
        $this->list->push(3);
    }

    /**
     * Метод offsetGet() - Возвращает значение по индексу
     */
    public function test_get_element_by_index(): void
    {
        $value = $this->list->offsetGet(0);

        self::assertSame(1, $value);
    }

    /**
     * Метод top() - возвращает последний элемент списка
     */
    public function test_get_last_element(): void
    {
        $value = $this->list->top();

        self::assertSame(3, $value);
    }

    /**
     * Метод bottom() - возвращает первый элемент списка
     */
    public function test_get_first_element(): void
    {
        $value = $this->list->bottom();

        self::assertSame(1, $value);
    }

    /**
     * Метод count() - возвращает количество элементов в списке
     */
    public function test_get_count_elements(): void
    {
        $count = $this->list->count();

        self::assertSame(3, $count);
    }
}