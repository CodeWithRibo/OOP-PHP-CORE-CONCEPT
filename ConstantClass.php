<?php

class Http
{
    public const NOT_FOUND = 404;
    public const UNAUTHORIZED = 401;
    public const OK = 200;
}

echo 'NOT FOUND : '. Http::NOT_FOUND . PHP_EOL;
echo 'UNAUTHORIZED : '. Http::UNAUTHORIZED . PHP_EOL;
echo 'OK : '. Http::OK . PHP_EOL;
