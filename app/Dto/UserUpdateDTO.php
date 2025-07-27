<?php

namespace App\Dto;

class UserUpdateDTO
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $postcode,
        public string $city,
        public string $phone
    ) {}

    public function toArray(): array
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'postcode' => $this->postcode,
            'city' => $this->city,
            'phone' => $this->phone,
        ];
    }
}
