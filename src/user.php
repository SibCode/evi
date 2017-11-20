<?php
declare(strict_types=1);

final class User
{
    private $name;

    private function __construct(string $name)
    {
        $this->ensureIsValidName($name);
        $this->name = $name;
    }

    public static function fromString(string $name): self
    {
        return new self($name);
    }

    public function __toString(): string
    {
        return $this->name;
    }

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
