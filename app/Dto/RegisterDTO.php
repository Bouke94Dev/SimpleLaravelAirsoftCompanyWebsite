<?php

namespace App\Dto;

class RegisterDTO
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $email,
        public readonly string $password
    ) {}
}
