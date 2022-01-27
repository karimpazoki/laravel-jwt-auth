<?php

namespace Kaafochino\LaravelJwtAuth\Claims;

use Kaafochino\LaravelJwtAuth\Claims\Claim;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class JwtId extends Claim
{
    protected string $name = 'jti';

    public function validate(string $data): bool
    {
        $validator = Validator::make($data, [
            'required',
            'uuid',
        ]);

        return !$validator->fails();
    }

    public function create(): string
    {
        return Str::uuid()->toString();
    }
}
