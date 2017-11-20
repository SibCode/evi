<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers user
 * 20.11.2017 by Simon Bertschinger.
 */
 
final class UserTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            User::class,
            User::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        User::fromString('invalidUser');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            User::fromString('user@example.com')
        );
    }
}
