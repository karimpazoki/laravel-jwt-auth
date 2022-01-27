<?php

namespace Kaafochino\LaravelJwtAuth\Claims;

use Kaafochino\LaravelJwtAuth\Claims\Claim;
use Illuminate\Support\Facades\Validator;

class IssuedAt extends Claim
{
    protected string $name = 'iat';

    public function validate(string $data): bool
    {
        $validator = Validator::make($data, [
            'required',
            'integer',
            fn ($attr, $data, $fail) => ($data - time()) > 0 ? $fail('') : null,
        ]);

        return !$validator->fails();
    }

    public function create(): string
    {
        return time();
    }
}
