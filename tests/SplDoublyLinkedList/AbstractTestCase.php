<?php

namespace App\Tests\SplDoublyLinkedList;

use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    protected \SplDoublyLinkedList $list;

    public function setUp(): void
    {
        $this->list = new \SplDoublyLinkedList();
    }

    /**
     * Возвращает двусвязанный список в формате массива
     * Метод rewind() - Возвращает итератор в начало списка
     * Метод valid() - Проверяет, содержит ли узлы двусвязный список
     * Метод next() - Перемещает итератор к следующему элементу
     * Метод current() - Возвращает текущий элемент списка
     */
    protected function getListToArray(): array
    {
        for ($this->list->rewind(); $this->list->valid(); $this->list->next()) {
            $result[] = $this->list->current();
        }
        return $result ?? [];
    }
}