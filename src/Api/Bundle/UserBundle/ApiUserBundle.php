<?php

namespace Api\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApiUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
