<?php

namespace Clicksco\Pushover;

interface PushMessageInterface
{
    public function setTitle($title);
    public function getTitle();
    public function setMessage($message);
    public function getMessage();
    public function setDate(\DateTime $date);
    public function getDate();
}
