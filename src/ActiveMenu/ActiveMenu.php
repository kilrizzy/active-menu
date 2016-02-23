<?php

namespace ActiveMenu;

use ActiveMenu\Contracts\ActiveMenuContract;
use Illuminate\Support\Facades\Request;

class ActiveMenu implements ActiveMenuContract
{
    public function check($routes=[],$class='active'){
        foreach($routes as $route){
            if(Request::is($route)){
                return $class;
            }
        }
        return '';
    }
}