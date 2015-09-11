<?php

namespace CEG\ApplicationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CEGApplicationBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
