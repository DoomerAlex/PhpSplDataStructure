<?php

namespace App\Tests\SplDoublyLinkedList;

final class AssertsTest extends AbstractTestCase
{
    /**
     * Метод isEmpty() - Проверяет пустой список или нет
     */
    public function test_empty_list(): void
    {
        self::assertTrue($this->list->isEmpty());

        $this->list->push('element');

        self::assertFalse($this->list->isEmpty());
    }

    /**
     * Метод offsetExists() - Проверяет существует ли запрашиваемый индекс
     */
    public function test_exist_index(): void
    {
        self::assertFalse($this->list->offsetExists(0));

        $this->list->add(0, 'element');

        self::assertTrue($this->list->offsetExists(0));
    }

    /**
     * Метод valid() - Проверяет доступен ли следующий элемент списка
     */
    public function test_valid_iteration(): void
    {
        // Не доступен так как список пустой
        self::assertFalse($this->list->valid());
        // добавляем элемент
        $this->list->add(0, 'element');
        // Все равно не досупен, так как мы не установили итератор
        self::assertFalse($this->list->valid());
        // Устанавливаем итератор в начало списка
        $this->list->rewind();
        // Теперь следующий элемент списка доступен
        self::assertTrue($this->list->valid());
        // Перемещаем итератор на последний элемент
        $this->list->next();
        // Так как следующего элемента нет, то вернет false
        self::assertFalse($this->list->valid());
    }
}