<?php

namespace App\Middleware\Contract;

use hisorange\BrowserDetect\Parser as Browser;
use App\Middleware\Contract\MiddlewareInterface;

class BlockChrome implements MiddlewareInterface
{
    public function handle()
    {
        if (Browser::isChrome()) {
            die('Chrome was Blocked !');
        }
    }
}
