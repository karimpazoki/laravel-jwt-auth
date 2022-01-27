<?php

namespace Kaafochino\LaravelJwtAuth\Claims;

use Kaafochino\LaravelJwtAuth\Claims\Claim;
use Illuminate\Support\Facades\Validator;

class Subject extends Claim
{
    protected string $name = 'sub';

    public function validate(string $data): bool
    {
        $validator = Validator::make($data, [
            'required',
            'integer',
            'min:1'
        ]);

        return !$validator->fails();
    }

    public function create(): string
    {
        return $this->getData();
    }
}
