<?php

namespace App\Models\Entities;

final class User
{
    public function __construct(
        private int $id,
        private string $name,
        public string $lastName
    ) {
    }

    /**
     * @param array{
     *  id: int,
     *  name: string,
     *  last_name: string
     * } $data
     */
    public static function createFromArray(array $data): self
    {
        return new self(
            $data['id'],
            $data['name'],
            $data['last_name']
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): self
    {
        $this->name = $value;
        return $this;
    }

    public function getLasName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $value): self
    {
        $this->lastName = $value;
        return $this;
    }
}
