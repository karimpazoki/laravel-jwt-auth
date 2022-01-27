<?php

namespace Kaafochino\LaravelJwtAuth\Claims;

use Kaafochino\LaravelJwtAuth\Contracts\Claim as ClaimContract;

abstract class Claim implements ClaimContract
{
    protected string $data;
    protected string $name;

    public function __construct(string $data)
    {
        $this->setData($data);
    }

    public function setData(string $data): void
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public abstract function validate(string $value): bool;

    public abstract function create(): string;
}
