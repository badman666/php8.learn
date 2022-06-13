<?php

class Test1
{
    public function __construct()
    {
        throw new \MyException('My message');
    }
}