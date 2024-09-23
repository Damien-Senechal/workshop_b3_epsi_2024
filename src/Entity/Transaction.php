<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $reservation_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $check_out_at = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $returned_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReservationId(): ?int
    {
        return $this->reservation_id;
    }

    public function setReservationId(int $reservation_id): static
    {
        $this->reservation_id = $reservation_id;

        return $this;
    }

    public function getCheckOutAt(): ?\DateTimeInterface
    {
        return $this->check_out_at;
    }

    public function setCheckOutAt(\DateTimeInterface $check_out_at): static
    {
        $this->check_out_at = $check_out_at;

        return $this;
    }

    public function getReturnedAt(): ?\DateTimeInterface
    {
        return $this->returned_at;
    }

    public function setReturnedAt(\DateTimeInterface $returned_at): static
    {
        $this->returned_at = $returned_at;

        return $this;
    }
}
