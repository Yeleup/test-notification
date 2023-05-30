<?php

namespace User;

class User
{
    private $id;
    private $email;
    private $phoneNumber;
    private $device;

    public function __construct(int $id, string $email, string $phoneNumber, array $device)
    {
        $this->id = $id;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->device = $device;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getDevice(): array
    {
        return $this->device;
    }
}