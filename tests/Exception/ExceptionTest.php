<?php declare(strict_types=1);

namespace Test\Exception;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use Code\Exception\ThrowException;

final class ExceptionTest extends TestCase
{
    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new ThrowException())->run();
    }
}