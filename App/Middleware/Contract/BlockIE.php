<?php

namespace App\Middleware\Contract;

use hisorange\BrowserDetect\Parser as Browser;
use App\Middleware\Contract\GlobalMiddleware;


class BlockIE implements GlobalMiddleware
{
  public function handle()
  {
    if (Browser::isIE()) {
      die('IE was Blocked!');
    }
  }
}
