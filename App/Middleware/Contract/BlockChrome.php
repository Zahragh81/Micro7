<?php

namespace App\Middleware\Contract;

use hisorange\BrowserDetect\Parser as Browser;
use App\Middleware\Contract\GlobalMiddleware;

class BlockChrome implements GlobalMiddleware
{
    public function handle()
    {
        if (Browser::isChrome()) {
            die('Chrome was Blocked !');
        }
    }
}
