<?php

declare(strict_types=1);

namespace App\Http\Telegraph\Commands;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class Start extends WebhookHandler
{
    public function start(): void
    {
        $this->reply("hello");
    }
}
