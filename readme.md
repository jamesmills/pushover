[![Build Status](https://travis-ci.org/jamesmills/pushover.png?branch=master)](https://travis-ci.org/jamesmills/pushover)

## Requirements

* A [Pushover](https://pushover.net) account
* Have installed Pushover app on your phone
([iPhone](http://itunes.apple.com/us/app/pushover-notifications/id506088175?mt=8) or [Android](https://play.google.com/store/apps/details?id=net.superblock.pushover&hl=fr))

Once you've been registered and after having installed the mobile application,
[click this link](https://pushover.net/apps/build) to create your own API application
and get back your personal token/key.

## Example

``` php
<?php

use Clicksco\Pushover\PushMessage;
use Clicksco\Pushover\PushManager;

$push_message = new PushMessage;
$push_message->setTitle('This is the title');
$push_message->setDate(new \DateTime());
$push_message->setMessage('This is the message');

$push_manager = new PushManager('YOUR-APP-TOKEN');

$push_manager->setMessage($push_message);
$push_manager->addUser('YOUR-USER-TOKEN');
$this->info($push_manager->send());
```
