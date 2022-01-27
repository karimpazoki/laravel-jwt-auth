<?php

namespace Kaafochino\LaravelJwtAuth\Claims;

use Kaafochino\LaravelJwtAuth\Claims\Claim;
use Illuminate\Support\Facades\Validator;

class Expiration extends Claim
{
    protected string $name = 'exp';

    public function validate(string $data): bool
    {
        $validator = Validator::make($data, [
            'required',
            'integer',
            fn ($attr, $data, $fail) => ($data - time()) < 0 ? $fail('') : null,
        ]);

        return !$validator->fails();
    }

    public function create(): string
    {
        return strtotime('+' . $this->getData() . ' minutes', time());
    }
}
