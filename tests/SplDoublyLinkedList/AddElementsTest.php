<?php

namespace App\Tests\SplDoublyLinkedList;

/**
 * Тесты на добавление элементов в двусвязный список
 */
final class AddElementsTest extends AbstractTestCase
{
    /**
     * Метод push() - добавляет элементы в конец списка
     */
    public function test_add_element_to_list(): void
    {
        $this->list->push(1);
        $this->list->push('string');
        $this->list->push(12.5);
        $this->list->push(true);

        self::assertSame([1, 'string', 12.5, true], $this->getListToArray());
    }

    /**
     * Метод unshift() - добавляет элемент в начало списка
     */
    public function test_add_element_to_first(): void
    {
        $this->list->push(1);
        $this->list->push(2);
        $this->list->push(3);

        $this->list->unshift(4);

        self::assertSame([4, 1, 2, 3], $this->getListToArray());
    }

    /**
     * Метод add() - добаляет элементы по ключу списка
     */
    public function test_add_element_by_key(): void
    {
        $this->list->add(0, 'first');
        $this->list->add(1, 'second');
        $this->list->add(2, 'third');

        self::assertSame(['first', 'second', 'third'], $this->getListToArray());
    }

    /**
     * Если попытаться добавить в пустой список значение на несуществующий ключ, то будет ошибка
     */
    public function test_add_element_with_wrong_key(): void
    {
        $this->expectException(\OutOfRangeException::class);

        $this->list->add(1, 'first');
    }

    /**
     * Если добавить значение в уже имеющийся узел, то старый подвинется вперед
     */
    public function test_add_element_in_existed_key(): void
    {
        $this->list->add(0, 'first');
        $this->list->add(1, 'second');
        $this->list->add(1, 'third');

        self::assertSame(['first', 'third', 'second'], $this->getListToArray());
    }

    /**
     * Тип индекса должен быть типа int
     */
    public function test_add_with_string_index(): void
    {
        $this->expectException(\TypeError::class);

        $this->list->add('first', 'first');
    }
}