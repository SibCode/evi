<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers user
 * 20.11.2017 by Simon Bertschinger.
 * 27.11.2017:
 * User Test Class used to verify functionality of the User class
 */

final class UserTest extends TestCase
{
    // Validates that a User can be generated from a valid email
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            User::class,
            User::fromString('user@example.com')
        );
    }

    // Validates that a User can NOT be created from an invalid email
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        User::fromString('invalidUser');
    }

    // Validates that the User can return a string
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            User::fromString('user@example.com')
        );
    }
}
