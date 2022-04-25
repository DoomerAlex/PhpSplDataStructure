<?php

namespace App\Tests\SplStack;

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    private \SplStack $stack;

    public function setUp(): void
    {
        $this->stack = new \SplStack();
    }

    public function test_stack_usage(): void
    {
        $this->stack[] = 'first';
        $this->stack->push('second');
        $this->stack->add(2, 'third');

        self::assertSame([3,2,1], $this->getStackToArray());

        $value = $this->stack->pop();

        self::assertSame(3, $value);
        self::assertSame([2,1], $this->getStackToArray());
    }

    /**
     * Направление итерации не может быть изменено для объектов SplStack,
     * оно всегда равно SplDoublyLinkedList::IT_MODE_LIFO
     */
    public function test_change_iteration_mode(): void
    {
        $this->expectException(\RuntimeException::class);

        $this->stack->setIteratorMode(\SplDoublyLinkedList::IT_MODE_FIFO);
    }

    private function getStackToArray(): array
    {
        for ($this->stack->rewind(); $this->stack->valid(); $this->stack->next()) {
            $result[] = $this->stack->current();
        }
        return $result ?? [];
    }
}