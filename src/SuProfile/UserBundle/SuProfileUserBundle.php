<?php
 
namespace SuProfile\UserBundle;
 
use Symfony\Component\HttpKernel\Bundle\Bundle;
 
class SuProfileUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
