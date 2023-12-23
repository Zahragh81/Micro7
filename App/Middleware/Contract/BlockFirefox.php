<?php

namespace App\Middleware\Contract;

use hisorange\BrowserDetect\Parser as Browser;

use App\Middleware\Contract\GlobalMiddleware;

class BlockFirefox implements GlobalMiddleware
{
    public function handle()
    {
        if (Browser::isFirefox()) {
            die('Firefox was Blocked !');
        }
    }
}
