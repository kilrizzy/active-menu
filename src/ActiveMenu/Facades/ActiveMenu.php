<?php

namespace ActiveMenu\Facades;
use Illuminate\Support\Facades\Facade;

class ActiveMenu extends Facade{
    protected static function getFacadeAccessor() {
        return 'ActiveMenuContract';
    }
}