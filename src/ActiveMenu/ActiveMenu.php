<?php

namespace App\Helpers\ActiveMenu;

use App\Helpers\ActiveMenu\Contracts\ActiveMenuContract;
use Request;

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