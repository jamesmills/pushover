$push_message = new PushMessage;
$push_message->setTitle('This is the title');
$push_message->setDate(new \DateTime());
$push_message->setMessage('This is the message');

$push_manager = new PushManager(\Config::get('custom.pushover.token'));

$push_manager->setMessage($push_message);
$push_manager->addUser('YOUR USER TOKEN');
$this->info($push_manager->send());