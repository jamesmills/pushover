<?php

namespace Clicksco\Pushover;

use Clicksco\Pushover\Exception\InvalidMessageException;
use Guzzle\Http\Client;

class PushManager
{
    protected $endpoint;
    protected $token;
    protected $user;
    protected $sound;
    protected $message;
    protected $users = array();

    public function __construct($params)
    {
        $this->endpoint = 'https://api.pushover.net/1/';
        $this->token = $params['api_token'];
        $this->sound = 'cashregister';
    }

    public function setMessage(PushMessage $message)
    {
        $this->message = $message;
    }

    public function addUser($user)
    {
        $this->users[] = $user;
    }

    public function send()
    {
        if ($this->message->getMessage() == null) {
            throw new InvalidMessageException('There is no message to push');
        }

        foreach ($this->users as $user) {

            $client = new Client($this->endpoint);
            $request = $client->post('messages.json', null, array(
                    'token' => $this->token,
                    'user' => $user,
                    'title' => $this->message->getTitle(),
                    'message' => $this->message->getMessage(),
                    'sound' => $this->sound
                ));
            $response = $request->send();
            echo $response->getBody();

        }
    }
}
