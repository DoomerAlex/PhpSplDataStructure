<?php

namespace App\Tests\SplFixedArray;

use PHPUnit\Framework\TestCase;

/**
 * примеры работы с классом SplFixedArray
 */
final class FixedArrayTest extends TestCase
{
    private \SplFixedArray $splArray;

    public function setUp(): void
    {
        $this->splArray = new \SplFixedArray(3);
    }

    /**
     * Добавление элемента в массив.
     * Пока элементов нет, их значения будут null
     */
    public function test_add_elements(): void
    {
        $this->splArray[0] = 'first';
        $this->splArray->offsetSet(1, 'second');

        self::assertSame(['first', 'second', null], $this->splArray->toArray());
    }

    /**
     * Если попытаться добавить элемент в несуществующий индекс, то будет ошибка
     */
    public function test_wrong_add_index(): void
    {
        $this->expectException(\RuntimeException::class);

        $this->splArray->offsetSet(3, 'second');
    }

    /**
     * Метод setSize() - изменяет размер массива.
     * Если в меньшую сторону, то последние значения отрежутся.
     */
    public function test_change_size(): void
    {
        // Изначально массив состоит из 3-х элементов
        self::assertSame(3, $this->splArray->count());
        // Заполним данными
        $this->splArray->offsetSet(0, 'first');
        $this->splArray->offsetSet(1, 'second');
        $this->splArray->offsetSet(2, 'third');
        // Проверим
        self::assertSame(['first', 'second', 'third'], $this->splArray->toArray());
        // Теперь увеличим длину массива до 5
        $this->splArray->setSize(5);
        // Проверим новое колиство
        self::assertSame(5, $this->splArray->count());
        // Новые ячейки имеют значение null
        self::assertSame(['first', 'second', 'third', null, null], $this->splArray->toArray());
        // Сократим размер до 2
        $this->splArray->setSize(2);
        // Проверим новое колиство
        self::assertSame(2, $this->splArray->count());
        // последние элементы массива отрезались
        self::assertSame(['first', 'second'], $this->splArray->toArray());
    }

    /**
     * Метод offsetGet() - Возврашает значение по индексу
     */
    public function test_get_elements(): void
    {
        // Заполним данными
        $this->splArray->offsetSet(0, 'first');
        $this->splArray->offsetSet(1, 'second');
        $this->splArray->offsetSet(2, 'third');

        self::assertSame('first', $this->splArray->offsetGet(0));
        self::assertSame('second', $this->splArray[1]);
    }

    /**
     * Метод offsetUnset() - удаляет значение элемента и заменяет его на null
     */
    public function test_delete_elements(): void
    {
        // Заполним данными
        $this->splArray->offsetSet(0, 'first');
        $this->splArray->offsetSet(1, 'second');
        $this->splArray->offsetSet(2, 'third');

        $this->splArray->offsetUnset(0);

        self::assertSame([null, 'second', 'third'], $this->splArray->toArray());
    }

    /**
     * Метод offsetExists() - проверяет, существует ли элемент и !== null
     */
    public function test_check_exist_element(): void
    {
        // Так как элемент не заполнен, то будет false
        self::assertFalse($this->splArray->offsetExists(0));
        // Заполним данными
        $this->splArray->offsetSet(0, 'test');
        // Теперь заполнен и будет true
        self::assertTrue($this->splArray->offsetExists(0));
        // Ключа 3 нет, поэтому будет false
        self::assertFalse($this->splArray->offsetExists(3));
    }

    /**
     * Для перебора массива можно использовать конструкцию foreach
     */
    public function test_foreach(): void
    {
        $this->splArray->offsetSet(0, 'first');
        $this->splArray->offsetSet(1, 'second');
        $this->splArray->offsetSet(2, 'third');

        $result = [];
        foreach ($this->splArray as $key => $value) {
            $result[$key] = $value;
        }

        self::assertSame($result, $this->splArray->toArray());
    }

    /**
     * Статический метод fromArray() формирует из массива объект SplFixedArray
     */
    public function test_convert_array(): void
    {
        $inputArray = ['first', 'second', 'third'];
        // Конвертируем массив в фиксированный массив
        $splArray = \SplFixedArray::fromArray($inputArray);
        // Размер при импорте будет равер размеру массива
        self::assertSame(3, $splArray->count());

        self::assertSame($inputArray, $splArray->toArray());
    }
}