<?php

namespace App\Tests\SplDoublyLinkedList;

final class EditElementsTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->list->push(1);
        $this->list->push(2);
        $this->list->push(3);
    }

    /**
     * Метод offsetSet() по ключу меняет значение элемента
     */
    public function test_edit_list_value(): void
    {
        $this->list->offsetSet(0, 4);

        self::assertSame([4,2,3], $this->getListToArray());
    }

    /**
     * Если попытаться изменить значение по несуществующему ключу, то выскочит исключение OutOfRangeException
     */
    public function test_edit_not_exist_value(): void
    {
        $this->expectException(\OutOfRangeException::class);

        $this->list->offsetSet(3, 4);
    }
}