<?php declare(strict_types=1);

namespace Code\Exception;

use InvalidArgumentException;

final class ThrowException
{
    public function run(): void
    {
        throw new InvalidArgumentException('test expect exception');
    }
}