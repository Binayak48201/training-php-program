<?php

class Request
{
    public function parse()
    {
       return trim($_SERVER['REQUEST_URI'],'/');
    }
}