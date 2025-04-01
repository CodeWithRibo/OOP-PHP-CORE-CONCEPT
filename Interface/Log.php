<?php

interface Logger
{
    public static function log($message): string;
}

class DetectErr implements Logger
{
    public static function log($message): string
    {
        return 'The cause of error is : ' . $message;
    }
}

echo DetectErr::log('syntax error');
