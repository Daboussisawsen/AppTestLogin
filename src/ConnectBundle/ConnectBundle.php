<?php

namespace ConnectBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ConnectBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
