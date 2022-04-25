<?php

namespace App\Tests\SplQueue;

use PHPUnit\Framework\TestCase;

final class QueueTest extends TestCase
{
    private \SplQueue $queue;

    public function setUp(): void
    {
        $this->queue = new \SplQueue();
    }

    /**
     * Функция enqueue() - добавляет значение в конец очереди (псевдоним функции \SplDoublyLinkedList::push())
     * Функция dequeue() - забирает первое значение из очереди (псевдоним функции \SplDoublyLinkedList::shift())
     */
    public function test_queue_usage(): void
    {
        $this->queue[] = 'first';
        $this->queue->enqueue('second');
        $this->queue->push('third');
        $this->queue->add(3, 'fourth');

        self::assertSame(['first', 'second', 'third', 'fourth'], $this->getListToArray());

        $value = $this->queue->dequeue();

        self::assertSame('first', $value);
        self::assertSame(['second', 'third', 'fourth'], $this->getListToArray());
    }

    /**
     * При попытке взять несуществующий элемент будет ошибка
     */
    public function test_get_empty_value(): void
    {
        $this->expectException(\RuntimeException::class);

        $this->queue->dequeue();
    }

    /**
     * Направление итерации не может быть изменено для объектов SplQueue,
     * оно всегда равно SplDoublyLinkedList::IT_MODE_FIFO
     */
    public function test_change_iteration_mode(): void
    {
        $this->expectException(\RuntimeException::class);

        $this->queue->setIteratorMode(\SplDoublyLinkedList::IT_MODE_LIFO);
    }

    private function getListToArray(): array
    {
        for ($this->queue->rewind(); $this->queue->valid(); $this->queue->next()) {
            $result[] = $this->queue->current();
        }
        return $result ?? [];
    }
}