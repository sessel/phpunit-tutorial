<?php declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;
use Code\DataProvider\ExternalDataProvider;

final class NumericDataSetsTestUsingExternalDataProvider extends TestCase
{
    #[DataProviderExternal(ExternalDataProvider::class, 'additionProvider')]
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }
}