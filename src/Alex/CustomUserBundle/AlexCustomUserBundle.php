<?php

namespace Alex\CustomUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlexCustomUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
