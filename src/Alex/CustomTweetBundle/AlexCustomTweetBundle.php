<?php

namespace Alex\CustomTweetBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlexCustomTweetBundle extends Bundle
{
    public function getParent(){
        return 'EndroidTwitterBundle';
    }
}
