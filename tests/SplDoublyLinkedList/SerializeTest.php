<?php

namespace App\Tests\SplDoublyLinkedList;

final class SerializeTest extends AbstractTestCase
{
    /**
     * Метод serialize() - Сериализует данные списка в строку
     */
    public function test_serialize(): void
    {
        $this->list->add(0, 'first');
        $this->list->add(1, 'second');
        $this->list->add(2, 'third');

        self::assertSame('i:0;:s:5:"first";:s:6:"second";:s:5:"third";', $this->list->serialize());
    }

    /**
     * Метод unserialize() - Дессириализует данные из строки в объект
     */
    public function test_unserialize(): void
    {
        $this->list->unserialize('i:0;:s:5:"first";:s:6:"second";:s:5:"third";');

        self::assertSame(['first', 'second', 'third'], $this->getListToArray());
    }

    /**
     * Если использовать метод unserialize() на не пустом списке, то старые значения в нем затрутся
     */
    public function test_unserialize_not_empty_list(): void
    {
        $this->list->add(0, 'old value');

        $this->list->unserialize('i:0;:s:5:"first";:s:6:"second";:s:5:"third";');

        self::assertSame(['first', 'second', 'third'], $this->getListToArray());
    }
}