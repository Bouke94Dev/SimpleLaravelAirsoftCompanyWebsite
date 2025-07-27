<?php

namespace App\Dto;

class ReservationDTO
{
    public function __construct(
        public int $userId,
        public int $siteId,
        public int $gearId,
        public string $startDate,
        public int $playerAmount,
        public ?string $note,
        public string $bookingDate
    ) {}

    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'site_id' => $this->siteId,
            'gear_id' => $this->gearId,
            'start_date' => $this->startDate,
            'player_amount' => $this->playerAmount,
            'note' => $this->note,
            'booking_date' => $this->bookingDate,
        ];
    }
}
