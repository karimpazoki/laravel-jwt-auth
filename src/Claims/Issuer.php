<?php

namespace Kaafochino\LaravelJwtAuth\Claims;

use Kaafochino\LaravelJwtAuth\Claims\Claim;
use Illuminate\Support\Facades\Validator;

class Issuer extends Claim
{
    protected string $name = 'iss';

    public function validate(string $data): bool
    {
        return $data === $this->getData();
    }

    public function create(): string
    {
        return $this->getData();
    }
}
