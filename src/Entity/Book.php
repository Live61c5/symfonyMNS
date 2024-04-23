<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    private ?Genre $genres = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    private ?Author $authors = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getGenres(): ?Genre
    {
        return $this->genres;
    }

    public function setGenres(?Genre $genres): static
    {
        $this->genres = $genres;

        return $this;
    }

    public function getAuthors(): ?Author
    {
        return $this->authors;
    }

    public function setAuthors(?Author $authors): static
    {
        $this->authors = $authors;

        return $this;
    }
}
