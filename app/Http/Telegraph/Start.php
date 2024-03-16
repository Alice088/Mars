<?php

namespace App\Http\Telegraph;


use DefStudio\Telegraph\Handlers\EmptyWebhookHandler;

class Start extends EmptyWebhookHandler
{
  public function start()
  {
    $this->chat->html("привет")->send();
  }
}
