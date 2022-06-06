<?php


namespace App\Channels\WhatsAppMessage;

class WhatsAppMessage
{
  public $content;
  
  public function content($content)
  {
    $this->content = $content;

    return $this;
  }
}