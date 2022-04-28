<?php

namespace App\Tests\SplHeap;

use PHPUnit\Framework\TestCase;

final class MinHeapTest extends TestCase
{
    private \SplMinHeap $heap;

    public function setUp(): void
    {
        $this->heap = new \SplMinHeap();
    }

    public function test_simple_usage(): void
    {
        // проверяем, что куча пустая
        self::assertTrue($this->heap->isEmpty());
        // заполняем данными в произвольном порядке
        $this->heap->insert(5);
        $this->heap->insert(4);
        $this->heap->insert(3);
        $this->heap->insert(1);
        $this->heap->insert(2);

        // Подсчитываем количество элементов в куче
        self::assertSame(5, $this->heap->count());
        // Метод extract() выдергивает из кучи элемент
        self::assertSame(1, $this->heap->extract());
        // проверяем оставшиеся элементы
        $result = [];
        for ($this->heap->rewind(); $this->heap->valid(); $this->heap->next()) {
            $result[] = $this->heap->current();
        }
        self::assertSame([2,3,4,5], $result);
        // так как метод next() по сути забывает предыдущие значения, то куча останется пустой
        self::assertSame(0, $this->heap->count());
    }

    /**
     * Строки куча сортирует от a до z
     */
    public function test_string(): void
    {
        $this->heap->insert('aaa');
        $this->heap->insert('zzzz');
        $this->heap->insert('b');
        $this->heap->insert('bbbbb');

        self::assertSame('aaa', $this->heap->extract());
        self::assertSame('b', $this->heap->extract());
        self::assertSame('bbbbb', $this->heap->extract());
        self::assertSame('zzzz', $this->heap->extract());
    }

    /**
     * Вообще хз как он тут все считает, но так лучше кучу не использовать
     */
    public function test_mixed(): void
    {
        $this->heap->insert(10);
        $this->heap->insert(true);
        $this->heap->insert('c');
        $this->heap->insert('z');
        $this->heap->insert('b');
        $this->heap->insert(11);
        $this->heap->insert([3,2]);

        $result = [];
        foreach ($this->heap as $value) {
            $result[] = $value;
        }

        self::assertSame([10, [3,2],'c','b','z', 11, true], $result);
    }
}