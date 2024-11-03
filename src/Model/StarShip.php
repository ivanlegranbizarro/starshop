<?php

namespace App\Model;

class StarShip
{
    public function __construct(
        private int $id,
        private string $name,
        private string $class,
        private string $model,
        private string $captain,
        private StarshipStatusEnum $status

    ) {}

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of model
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Set the value of model
     */
    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of captain
     */
    public function getCaptain(): string
    {
        return $this->captain;
    }

    /**
     * Set the value of captain
     */
    public function setCaptain(string $captain): self
    {
        $this->captain = $captain;

        return $this;
    }

    /**
     * Get the value of class
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * Set the value of class
     */
    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus(): StarshipStatusEnum
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus(StarshipStatusEnum $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStatusString(): string
    {
        return $this->status->value;
    }

    public function getStatusImageFilename(): string
    {
        return match ($this->status) {
            StarshipStatusEnum::COMPLETED => 'images/status-complete.png',
            StarshipStatusEnum::WAITING => 'images/status-waiting.png',
            StarshipStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
        };
    }
}
