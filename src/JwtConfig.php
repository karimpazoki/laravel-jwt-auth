<?php

namespace Kaafochino\LaravelJwtAuth;

class JwtConfig
{
    public function secret(): string
    {
        return config('jwt.secret');
    }

    public function key(): string
    {
        return config('jwt.key');
    }


    public function algorithm(): string
    {
        return config('jwt.algorithm');
    }

    public function expiration(string $token = 'access_token'): int
    {
        return config('jwt.expiration.' . $token);
    }

    public function issuer(): string
    {
        return config('jwt.issuer');
    }
}
