<?php
/**
 * Author: Simon Bertschinger.
 *
 * User Class used to verify username which needs to be a email while registering
 */

declare(strict_types=1);

final class User
{
    // Name of the user
    private $name;

    // Constructor of the class
    private function __construct(string $name)
    {
        $this->ensureIsValidName($name);
        $this->name = $name;
    }

    // Gives User back with name from String
    public static function fromString(string $name): self
    {
        return new self($name);
    }

    // Gives back the Name as a String
    public function __toString(): string
    {
        return $this->name;
    }

    // Checks that the name is a valid email String
    private function ensureIsValidName(string $name): void
    {
        if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid usename. Username needs to be a valid email address!',
                    $name
                )
            );
        }
    }
}
