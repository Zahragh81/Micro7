<?php

namespace App\Middleware\Contract;

use hisorange\BrowserDetect\Parser as Browser;
use App\Middleware\Contract\MiddlewareInterface;


class BlockIE implements MiddlewareInterface
{
  public function handle()
  {
    if (Browser::isIE()) {
      die('IE was Blocked!');
    }
  }
}
