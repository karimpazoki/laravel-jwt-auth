<?php

namespace Kaafochino\LaravelJwtAuth\Contracts;

interface Claim
{
    public function setData(string $data): void;

    public function getData(): string;

    public function setName(string $name): void;

    public function getName(): string;

    public function validate(string $value): bool;

    public function create(): string;
}
