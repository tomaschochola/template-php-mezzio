<?php

declare(strict_types=1);

namespace Tests\Handler;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @internal
 *
 * @no-named-arguments
 */
#[CoversNothing()]
#[Small()]
final class NotFoundHandlerTest extends TestCase
{
    #[Test()]
    public function test(): void
    {
        $response = $this->handle($this->createServerRequest('GET', '/not-found'));

        self::assertSame(404, $response->getStatusCode());
    }
}
